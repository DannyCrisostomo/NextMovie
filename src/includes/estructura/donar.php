<div class="donar fixed bottom-0">
    <div class="hidde" id="divImgDonate">
        <a href="./donar.php">
            <img src="./../assets/img/source/donar.png">
        </a>
        <p class="" style="cursor: pointer;" onclick="hiddenImgDonate()">X</p>
    </div>
</div>
<style>
/*Donar*/
.donar{
    padding: 20px 0px;
}
.fixed {
    position: fixed;
}
.bottom-0 {
    bottom: 0px;
}
.hidden{
    display: none;
}
.hidde{
    display: flex;
    gap: 0px;
}
.hidde  p {
    color: white;
    font-size: 1.2rem;
    width: 0px;
    height: 0px;
    display: flex;
    margin-top: -15px;
    background: #E91E63;
    justify-content: center;
    align-items: center;
}
.hidde  p:hover {
    transition-duration: 0.15s;
    font-size: 2rem;
}
.hidde a img {
    width: 180px;
    height: 200px;
}
</style>
<script>
    function hiddenImgDonate() {
        document.getElementById('divImgDonate').setAttribute('class', 'hidden');
    }
</script>