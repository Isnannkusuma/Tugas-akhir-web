</main>
    <footer class="bg-light">
      <div class="text-center p-2" style="background:#CCCCCC">
      copy; 2021 Company

      </div>
    </footer>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                callbacks: {
                    onImageUpload: function(files) {
                        for(let i=0; i < files.length; i++) {
                            $.upload(files[i]);
                    }
                },
                height : 200
            }});
            $.upload = function (file) {
                let out = new FormData();
                out.append('file', file, file.name);

            $.ajax({
                method: 'POST',
                url: 'upload_gambar.php',
                contentType: false,
                cache: false,
                processData: false,
                data: out,
            success: function (img) {
                $('#summernote').summernote('insertImage', img);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.error(textStatus + " " + errorThrown);
            }
        });
    };
        });
    </script>
</body>
</html>