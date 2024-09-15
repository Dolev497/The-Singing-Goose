<div class="drag-and-drop-container bg-white h-1/2 justify-center" id="drag-and-drop-container">

    <div class="py-24 px-12">
        <form id="file-upload-form" method="POST" enctype="multipart/form-data" action="/start">
            @csrf
            <input type="file" id="file-input" class="file-input">
            <label for="file-input" class="file-label" id="filelabel">
                Drag & Drop your files here or click to upload
            </label>


        </form>
    </div>
</div>
<x-primary-button form="file-upload-form" class="mt-10">Submit</x-primary-button>

<style>
    .drag-and-drop-container {
        border: 2px dashed #ccc;
        border-radius: 10px;
        padding: 20px;
        text-align: center;
        cursor: pointer;
    }

    .succesful-drop {


        padding: 10px;
        border: 1px solid #b0aea7;
        box-shadow:  -1px 1px #b0aea7,
        -2px 2px #b0aea7,
        -3px 3px #b0aea7,
        -4px 4px #b0aea7,
        -5px 5px #b0aea7;
        border-radius: 10px;

        text-align: center;
        cursor: pointer;
        background-color: white;

    }
    .file-input {
        display: none;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const container = document.getElementById('drag-and-drop-container');
        const fileInput = document.getElementById('file-input');
        const label = document.getElementById('filelabel');

        container.addEventListener('click', () => fileInput.click());

        container.addEventListener('dragover', (e) => {
            e.preventDefault();
            container.classList.add('dragging');
        });

        container.addEventListener('dragleave', () => {
            container.classList.remove('dragging');
        });

        container.addEventListener('drop', (e) => {
            e.preventDefault();
            container.classList.remove('dragging');
            fileInput.files = e.dataTransfer.files;

            // Handle file upload here
            console.log(fileInput.files);
            container.classList.remove("drag-and-drop-container")
            container.classList.add("succesful-drop");
            label.classList.add("font-bold")
            label.innerHTML = "File Accepted Succesfully!"
            label.classList.add("px-10")
        });
    });
</script>
