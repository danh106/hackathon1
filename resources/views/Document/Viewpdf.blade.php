<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Xem PDF scroll</title>
    <style>
        body {
            margin: 0; padding: 0;
            font-family: Arial, sans-serif;
            background: #f0f0f0;
            display: flex;
            flex-direction: column;
            height: 100vh;
        }
        #toolbar {
            background: #333;
            color: white;
            padding: 0.5rem 1rem;
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        #pdf-render {
            flex: 1;
            overflow-y: auto;
            background: #999;
            padding: 1rem;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        canvas {
            background: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.3);
            margin-bottom: 1rem;
            max-width: 100%;
            height: auto;
            border-radius: 4px;
        }
        button {
            background: #555;
            border: none;
            color: white;
            padding: 0.4rem 0.8rem;
            cursor: pointer;
            border-radius: 3px;
            font-size: 1rem;
        }
        button:hover {
            background: #777;
        }
    </style>
</head>
<body>

    <div id="toolbar">
        <span>Phóng to / Thu nhỏ:</span>
        <button id="zoom-in">+</button>
        <button id="zoom-out">-</button>
    </div>

    <div id="pdf-render"></div>

    <!-- pdf.js CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.9.179/pdf.min.js"></script>
    <script>
        const url = "{{ $filePath }}";  // link file PDF trên server bạn

        let pdfDoc = null,
            scale = 1.5,
            pdfRenderDiv = document.getElementById('pdf-render');

        // Hàm render 1 trang PDF ra canvas và thêm vào pdfRenderDiv
        function renderPage(pageNum) {
            return pdfDoc.getPage(pageNum).then(page => {
                const viewport = page.getViewport({ scale: scale });
                const canvas = document.createElement('canvas');
                const ctx = canvas.getContext('2d');
                canvas.height = viewport.height;
                canvas.width = viewport.width;
                canvas.style.borderRadius = "4px";

                const renderContext = {
                    canvasContext: ctx,
                    viewport: viewport
                };

                return page.render(renderContext).promise.then(() => {
                    pdfRenderDiv.appendChild(canvas);
                });
            });
        }

        // Hàm render toàn bộ trang
        function renderAllPages() {
            pdfRenderDiv.innerHTML = ''; // Xóa nội dung cũ
            let renderPromises = [];
            for(let i = 1; i <= pdfDoc.numPages; i++) {
                renderPromises.push(renderPage(i));
            }
            return Promise.all(renderPromises);
        }

        // Zoom In/Out
        document.getElementById('zoom-in').addEventListener('click', () => {
            scale += 0.25;
            renderAllPages();
        });
        document.getElementById('zoom-out').addEventListener('click', () => {
            if(scale <= 0.5) return;
            scale -= 0.25;
            renderAllPages();
        });

        pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.9.179/pdf.worker.min.js';

        pdfjsLib.getDocument(url).promise.then(pdfDoc_ => {
            pdfDoc = pdfDoc_;
            renderAllPages();
        }).catch(err => {
            pdfRenderDiv.innerHTML = `<p style="color:red;">Không thể tải file PDF: ${err.message}</p>`;
        });
    </script>

</body>
</html>
