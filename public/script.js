/*setInterval (function resizeContent(){
    const div_width = document.getElementById('product__g1').clientWidth;
    console.log(div_width);
    const div_heigth = document.getElementById('product__g1').clientHeight;
    console.log(div_heigth);

    const products_div = document.getElementsByClassName('product__content');
    const padding = (div_heigth < div_width)? (div_width - div_heigth)/2: (div_heigth - div_width)/2; 
    
    console.log(padding);

    document.getElementById('product__g1').style.paddingTop = padding;
    products_div.style.paddingTop = padding;
    products_div.style.paddingBottom = padding;
    document.getElementsByClassName('product__content').style.padding = padding;
    /*if(div_heigth > div_width){
        var padding = (div_heigth - div_width)/2;
        console.log("1 " + padding);
        document.products_div.style.paddingLeft = padding;
        document.products_div.style.paddingRight = padding;


    }
    else if(div_heigth < div_width){
        var padding = (div_width -div_heigth)/2;
        console.log("2 " + padding);
        products_div.style.paddingTop = padding;
        products_div.style.paddingBottom = padding;
    }

    
}, 1);


setInterval(function resizeContent(){
    var rootElement = document.documentElement;
    var div_width = document.getElementById('product__g1').clientWidth;
    console.log(div_width);
    var div_heigth = document.getElementById('product__g1').clientHeight;
    console.log(div_heigth);

    var padding = (div_heigth < div_width)? (div_width - div_heigth)/2: (div_heigth - div_width)/2; 
    rootElement.style.setProperty("--padding-topbottom-content", padding);
    
    var Element = document.documentElement.style.getPropertyValue("--padding-topbottom-content");
    document.documentElement.style.setProperty("--padding-topbottom-content", padding);
    console.log(padding);
},1);
*/

setInterval(function resizeContent(){

    var div_width = document.getElementById('product__g1').clientWidth;
    /*var div_heigth = document.getElementById('product__g1').clientHeight;

    document.getElementsByClassName(".product__content").style.heigth = div_width;

    var padding = (div_heigth < div_width)? (div_width - div_heigth)/2: (div_heigth - div_width)/2; 
    
    document.documentElement.style.setProperty("--padding-topbottom-content", padding);
    console.log(padding);*/

    document.getElementById('product_g1').style.height= div_width;
},1);





