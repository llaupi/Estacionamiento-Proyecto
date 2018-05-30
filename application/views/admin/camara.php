<img src="" id="img">
        <video id="v"></video>
        <canvas id="c"></canvas>
        <button id="t">Toma una foto</button>
        <script>
            window.addEventListener('load', init);
            function init() {
                var video = document.querySelector("#v"), canvas = document.querySelector("#c"),
                        btn = document.querySelector("#t"), img = document.querySelector("#img");
                
                navigator.getUserMedia = (navigator.getUserMedia ||
                        navigator.webkitGetUserMedia ||
                        navigator.mozGetUserMedia ||
                        navigator.msGetUserMedia);
                
                if (navigator.getUserMedia) {
                    navigator.getUserMedia({video:true},function(stream){
                        video.src=window.URL.createObjectURL(stream);
                        video.play();
                    },function(e){console.log(e);})
                }else{
                    alert("cambia de navegador");
                }
                video.addEventListener('loadedmetadata',function(){canvas.width="400"; canvas.height="400";},false);
                btn.addEventListener('click',function(){
                   canvas.getContext('2d').drawImage(video,0,0);
                   var imgData=canvas.toDataURL("image/png");
                   img.setAttribute("src",imgData);
                });
            }
        </script>
    </main>