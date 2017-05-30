$( document ).ready(function() {    
    
});

var layer;
var background = new Image();
var count;

var path1 = new fabric.Path('M 10 540 L 213 540 L 213 442 L 398 442 L 398 540 L 609 540 L 609 572 L 10 572 L 10 540 z');
var rect1 = new fabric.Rect({left:240,top:464,width:129,height:62});

var rect2 = new fabric.Rect({left:85,top:402,width:450,height:33});

var rect3_1 = new fabric.Rect({left:86,top:146,width:35,height:248});
var rect3_2 = new fabric.Rect({left:196,top:146,width:38,height:248});

var rect4_1 = new fabric.Rect({left:377,top:146,width:37,height:248});
var rect4_2 = new fabric.Rect({left:492,top:145,width:43,height:248});

var rect5 = new fabric.Rect({left:84,top:103,width:453,height:34});

function init() {
    background.src ="peta.png";
    layer = new fabric.Canvas("canvas");
    drawBackground();
}

function showAlert(number, color) {
    var timer;
    switch(number){
        case 1: timer = draw1(color);break;
        case 2: timer = draw2(color);break;
        case 3: timer = draw3(color);break;
        case 4: timer = draw4(color);break;
        case 5: timer = draw5(color);break;
            
    }
    
    return(timer);
}

function removeAlert(timer, number){
     switch(number){
        case 1: 
             clearInterval(timer);
             rect1.set({stroke:'rgba(0,0,0,0)',fill:'rgba(0,0,0,0)', strokeWidth:5});
             path1.set({stroke:'rgba(0,0,0,0)',fill:'rgba(0,0,0,0)', strokeWidth:5});
             layer.renderAll();
             break;
        case 2: 
             clearInterval(timer);
             rect2.set({stroke:'rgba(0,0,0,0)',fill:'rgba(0,0,0,0)', strokeWidth:5});
             layer.renderAll();
             break;
        case 3: 
             clearInterval(timer);
             rect3_1.set({stroke:'rgba(0,0,0,0)',fill:'rgba(0,0,0,0)', strokeWidth:5});
             rect3_2.set({stroke:'rgba(0,0,0,0)',fill:'rgba(0,0,0,0)', strokeWidth:5});
             layer.renderAll();
             break;
        case 4: 
             clearInterval(timer);
             rect4_1.set({stroke:'rgba(0,0,0,0)',fill:'rgba(0,0,0,0)', strokeWidth:5});
             rect4_2.set({stroke:'rgba(0,0,0,0)',fill:'rgba(0,0,0,0)', strokeWidth:5});
             layer.renderAll();
             break;
        case 5: clearInterval(timer);
             rect5.set({stroke:'rgba(0,0,0,0)',fill:'rgba(0,0,0,0)', strokeWidth:5});
             layer.renderAll();
             break;
    }
}

function drawBackground(){
    layer.renderAll();
    fabric.Image.fromURL('peta.png', function(oImg) {
        layer.sendToBack(oImg);
    });
}



function draw1(color) {
    //layer.renderAll();
    
    layer.add(rect1,path1);
    rect1.set({stroke:'rgba(0,0,0,0)',fill:'rgba(0,0,0,0)', strokeWidth:5});
    path1.set({stroke:'rgba(0,0,0,0)',fill:'rgba(0,0,0,0)', strokeWidth:5});
    count = 0;
    timer1 = setInterval(function(){
        count++;
        if(count% 2 == 1) {
           rect1.set({stroke:color,fill:'rgba(0,0,0,0)', strokeWidth:5});
            path1.set({stroke:color,fill:'rgba(0,0,0,0)', strokeWidth:5});
            //layer.add(rect,path);
            //prompt(path);
        }
        else{
            rect1.set({stroke:'rgba(0,0,0,0)',fill:'rgba(0,0,0,0)', strokeWidth:5});
            path1.set({stroke:'rgba(0,0,0,0)',fill:'rgba(0,0,0,0)', strokeWidth:5});
            //layer.add(rect,path);
        }
        layer.renderAll();
    }, 1000);
    
    return timer1;
}

    
function draw2(color){
    
    layer.add(rect2);
    rect2.set({stroke:'rgba(0,0,0,0)',fill:'rgba(0,0,0,0)', strokeWidth:5});
    count2 = 0;
    timer2 = setInterval(function(){
        count2++;
        if(count2% 2 == 1) {
           rect2.set({stroke:color,fill:'rgba(0,0,0,0)', strokeWidth:5});
            //layer.add(rect,path);
            //prompt(path);
        }
        else{
            rect2.set({stroke:'rgba(0,0,0,0)',fill:'rgba(0,0,0,0)', strokeWidth:5});
            //layer.add(rect,path);
        }
        layer.renderAll();
    }, 1000);
    
    return timer2;
}
    
function draw3(color){

    layer.add(rect3_1, rect3_2);
    rect3_1.set({stroke:'rgba(0,0,0,0)',fill:'rgba(0,0,0,0)', strokeWidth:5});
    rect3_2.set({stroke:'rgba(0,0,0,0)',fill:'rgba(0,0,0,0)', strokeWidth:5});
    count3 = 0;
    timer3 = setInterval(function(){
        count3++;
        if(count3% 2 == 1) {
           rect3_1.set({stroke:color,fill:'rgba(0,0,0,0)', strokeWidth:5});
           rect3_2.set({stroke:color,fill:'rgba(0,0,0,0)', strokeWidth:5});
            //layer.add(rect,path);
            //prompt(path);
        }
        else{
            rect3_1.set({stroke:'rgba(0,0,0,0)',fill:'rgba(0,0,0,0)', strokeWidth:5});
            rect3_2.set({stroke:'rgba(0,0,0,0)',fill:'rgba(0,0,0,0)', strokeWidth:5});
            //layer.add(rect,path);
        }
        layer.renderAll();
    }, 1000);
    
    return timer3;
}

function draw4(color){

    layer.add(rect4_1, rect4_2);
    rect4_1.set({stroke:'rgba(0,0,0,0)',fill:'rgba(0,0,0,0)', strokeWidth:5});
    rect4_2.set({stroke:'rgba(0,0,0,0)',fill:'rgba(0,0,0,0)', strokeWidth:5});
    count4 = 0;
    timer4 = setInterval(function(){
        count4++;
        if(count4% 2 == 1) {
           rect4_1.set({stroke:color,fill:'rgba(0,0,0,0)', strokeWidth:5});
           rect4_2.set({stroke:color,fill:'rgba(0,0,0,0)', strokeWidth:5});
            //layer.add(rect,path);
            //prompt(path);
        }
        else{
            rect4_1.set({stroke:'rgba(0,0,0,0)',fill:'rgba(0,0,0,0)', strokeWidth:5});
            rect4_2.set({stroke:'rgba(0,0,0,0)',fill:'rgba(0,0,0,0)', strokeWidth:5});
            //layer.add(rect,path);
        }
        layer.renderAll();
    }, 1000);
    
    return timer4;
} 

function draw5(color){
    
    layer.add(rect5);
    rect5.set({stroke:'rgba(0,0,0,0)',fill:'rgba(0,0,0,0)', strokeWidth:5});

    count5 = 0;
    timer5 = setInterval(function(){
        count5++;
        if(count5% 2 == 1) {
           rect5.set({stroke:color,fill:'rgba(0,0,0,0)', strokeWidth:5});
            //layer.add(rect,path);
            //prompt(path);
        }
        else{
            rect5.set({stroke:'rgba(0,0,0,0)',fill:'rgba(0,0,0,0)', strokeWidth:5});
            //layer.add(rect,path);
        }
        layer.renderAll();
    }, 1000);
    
    return timer5;
}    
    
//    path.stroke = 'rgba(0,255,0,1)';
//    path.stroke = 'rgba(0,255,0,1)';

//   count = 0;
//    timer1 = setInterval(function() {
//        count++;
//        if(count % 2 == 1) {
//            path.stroke = 'rgba(0,255,0,255)';
//            //prompt(path);
//        }
//        else{
//             path.stroke = 'rgba(0,255,0,1)';
////            path.set({stroke: 'rgba(0,0,0,0)', fill:'rgba(0,0,0,0)', strokeWidth:5});
////            rect.set({stroke: 'rgba(0,0,0,0)', fill:'rgba(0,0,0,0)', strokeWidth:5});
//        }
//            layer.add(path);
//            layer.renderAll();
//        //alert(path);
//         //layer0.bringToFront(path);
//         //layer0.bringToFront(rect);
//            
//    }, 1000)