<!DOCTYPE html>
<html>
<head>
  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
      tinymce.init({
       selector: "textarea",
            menubar: false,
            toolbar: false,
            statusbar: false,
            
           /* plugins: [
                "autolink lists link preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars",
                "nonbreaking table directionality",
                "paste textcolor colorpicker textpattern toc",
                "image_embed placeholder, code, noneditable, mention"
            ],*/

            
            paste_data_images: false,
            //language: "pt_BR",

            noneditable_regexp: [/\[\[[^\]]+\]\]/g],

             image_advtab: false,

            mentions: {
                insert: function(item) {
                    return "[[" + item.name + "]]";
                }
            },
            
            setup:function(ed){
                ed.on("change", function(e){
                  //  $("#comunicacoes_config-gravar").removeAttr("disabled");
                    
                });
                ed.on("init",function(e){
                    console.log("The Editor has initialized.");
                });
            },
            
            init_instance_callback: function (editor) {
                editor.on("keydown", function (e) {
                    console.log(e.key);
                   var qt= this.contentDocument.body.innerText.length;
                    var i=0;
                    
                    if(qt>0){
                        console.log(qt+1);
                    }
                    console.log(qt);
                    if(e.key==true){
                        console.log("clck");
                    }
                    if(e.key=="a"){
                        console.log("teste");
                        console.log((this.contentDocument.body.innerText.length)+1);
                    }
                   
                });
            },
  
        });

    </script>
</head>
<body>
  <textarea></textarea>
</body>
</html>



