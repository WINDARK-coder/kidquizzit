<script>
    $(document).ready(() => {
        $('.about-img').change(function() {
            const file = this.files[0];
            if (file) {
                let reader = new FileReader();
                reader.onload = function(event) {
                    console.log(event.target.result);
                    $('#imgPreview').attr('src', event.target.result);
                }
                reader.readAsDataURL(file);
            }
        });
    });
    CKEDITOR.replace('inputDescription');
    CKEDITOR.replace('inputLastName');
    CKEDITOR.replace('inputFirstName');


</script>
