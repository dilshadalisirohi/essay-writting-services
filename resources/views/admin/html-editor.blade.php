<script src="https://cdn.tiny.cloud/1/{{ config('services.tinymce.apiKey') }}/tinymce/5/tinymce.min.js"
    referrerpolicy="origin"></script>
<script>
    function saveagreement(inst) {
        let _token = $('input[name="_token"]').val();
        let doneText = tinyMCE.activeEditor.getContent();
        let editorBody = inst.currentTarget
        const headings = editorBody.querySelectorAll("h2")
        headings.forEach(heading => {
            heading.setAttribute("id", heading.textContent.split(" ")[0])

        })
        console.log(headings)



    }
    tinymce.init({
        selector: '{!! $selector !!}',
        plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
        menubar: 'file edit view insert format tools table help',
        toolbar: 'toolbar: undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl,',
        toolbar_mode: 'floating',
        cleanup: false,
        verify_html: false,
        relative_urls: false,
        convert_urls: false,
        remove_script_host: false,
        height: "620",
        init_instance_callback: function(editor) {
            editor.on('KeyUp', function(e) {
                saveagreement(e)
            });
        }
    });
</script>
