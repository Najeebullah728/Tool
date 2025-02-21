const { PDFDocument } = require('pdf-lib');
const fs = require('fs');
const path = require('path');

exports.handler = async (event) => {
    try {
        const body = JSON.parse(event.body);
        const pdfBytes = Buffer.from(body.file, 'base64');
        const pdfDoc = await PDFDocument.load(pdfBytes);
        const compressedPdf = await pdfDoc.save();

        return {
            statusCode: 200,
            headers: {
                'Content-Type': 'application/pdf',
                'Content-Disposition': 'attachment;
