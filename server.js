const express = require('express');
const multer = require('multer');
const pdf = require('pdf-lib');
const fs = require('fs');
const path = require('path');

const app = express();
const upload = multer({ dest: 'uploads/' });

// Serve the frontend
app.use(express.static('public'));

// PDF Compression Endpoint
app.post('/compress-pdf', upload.single('pdf'), async (req, res) => {
    try {
        const filePath = req.file.path;
        const pdfDoc = await pdf.PDFDocument.load(fs.readFileSync(filePath));
        const compressedPdf = await pdfDoc.save();

        // Clean up the uploaded file
        fs.unlinkSync(filePath);

        // Send the compressed PDF back to the client
        res.setHeader('Content-Type', 'application/pdf');
        res.setHeader('Content-Disposition', 'attachment; filename=compressed.pdf');
        res.send(compressedPdf);
    } catch (error) {
        console.error('Error compressing PDF:', error);
        res.status(500).send('An error occurred while compressing the PDF.');
    }
});

// Start the server
const PORT = process.env.PORT || 3000;
app.listen(PORT, () => {
    console.log(`Server running on http://localhost:${PORT}`);
});
