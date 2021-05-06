function getRnd(min, max) {
    const localMin = min;
    const localMax = max - min + 1;
    return Math.floor(Math.random() * localMax) + localMin;
}
function init() {
    new Vue({
        el: "#app",
        data: {
            'hello': 'Hello World',
            'img': ''
        },
        mounted() {
            axios.get('data.php')
                .then(r => {
                    console.log(r);
                    let imgs = r.data;
                    let imgsLng = imgs.length - 1;
                    let finded = false;
                    while(!finded) {
                        let rndInd = getRnd(0, imgsLng);
                        var img = imgs[rndInd];
                        finded = img['is_active'];
                    }
                    this.img = img['image_path'];
                })
                .catch(e => {
                    console.log(e);
                })
        }
    });
}
document.addEventListener("DOMContentLoaded",init);