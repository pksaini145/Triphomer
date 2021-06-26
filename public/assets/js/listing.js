var lowerSlider = document.querySelector('#lower'); 
var upperSlider = document.querySelector('#upper'); 
var rangeColor = document.querySelector('#range-color');

upperSlider.oninput = function() {
    lowerVal = parseInt(lowerSlider.value); 
    upperVal = parseInt(upperSlider.value);
     if (upperVal < lowerVal + 1) {
       lowerSlider.value = upperVal - 1;
        
        if (lowerVal == lowerSlider.min) {
           upperSlider.value = 1;
        }
    }

    rangeColor.style.marginLeft = (lowerSlider.value * 10) + '%';
    rangeColor.style.width = (upperSlider.value * 10) - (lowerSlider.value * 10) + '%';
   console.log('upper value: ' + upperSlider.value);
};

lowerSlider.oninput = function() {
    lowerVal = parseInt(lowerSlider.value); 
    upperVal = parseInt(upperSlider.value); 

   if (lowerVal > upperVal - 1) {
      upperSlider.value = lowerVal + 1;
     if (upperVal == upperSlider.max) {
    lowerSlider.value = parseInt(upperSlider.max) - 1;
        }

    }
    rangeColor.style.marginLeft = (lowerSlider.value * 10) + '%';
    rangeColor.style.width = (upperSlider.value * 10) - (lowerSlider.value * 10) + '%';
    console.log('lower value: ' + lowerSlider.value);
};

// as-range-color-1 filter start

var lowerSlider1 = document.querySelector('#lower1'); 
var upperSlider1 = document.querySelector('#upper1'); 
var rangeColor1 = document.querySelector('#range-color1');

upperSlider1.oninput = function() {
    lowerVal = parseInt(lowerSlider1.value); 
    upperVal = parseInt(upperSlider1.value);
     if (upperVal < lowerVal + 1) {
       lowerSlider1.value = upperVal - 1;
        
        if (lowerVal == lowerSlider1.min) {
           upperSlider1.value = 1;
        }
    }

    rangeColor1.style.marginLeft = (lowerSlider1.value * 10) + '%';
    rangeColor1.style.width = (upperSlider1.value * 10) - (lowerSlider1.value * 10) + '%';
   console.log('upper value: ' + upperSlider1.value);
};

lowerSlider1.oninput = function() {
    lowerVal = parseInt(lowerSlider1.value); 
    upperVal = parseInt(upperSlider1.value); 

   if (lowerVal > upperVal - 1) {
      upperSlider1.value = lowerVal + 1;
     if (upperVal == upperSlider1.max) {
    lowerSlider1.value = parseInt(upperSlider1.max) - 1;
        }

    }
    rangeColor1.style.marginLeft = (lowerSlider1.value * 10) + '%';
    rangeColor1.style.width = (upperSlider1.value * 10) - (lowerSlider1.value * 10) + '%';
    console.log('lower value: ' + lowerSlider1.value);
};

// as-range-color-1 filter end

// as-range-color-2 filter start

var lowerSlider2 = document.querySelector('#lower2'); 
var upperSlider2 = document.querySelector('#upper2'); 
var rangeColor2 = document.querySelector('#range-color2');

upperSlider2.oninput = function() {
    lowerVal = parseInt(lowerSlider2.value); 
    upperVal = parseInt(upperSlider2.value);
     if (upperVal < lowerVal + 1) {
       lowerSlider.value = upperVal - 1;
        
        if (lowerVal == lowerSlider2.min) {
           upperSlider2.value = 1;
        }
    }

    rangeColor2.style.marginLeft = (lowerSlider2.value * 10) + '%';
    rangeColor2.style.width = (upperSlider2.value * 10) - (lowerSlider2.value * 10) + '%';
   console.log('upper value: ' + upperSlider2.value);
};

lowerSlider2.oninput = function() {
    lowerVal = parseInt(lowerSlider2.value); 
    upperVal = parseInt(upperSlider2.value); 

   if (lowerVal > upperVal - 1) {
      upperSlider2.value = lowerVal + 1;
     if (upperVal == upperSlider2.max) {
    lowerSlider2.value = parseInt(upperSlider2.max) - 1;
        }

    }
    rangeColor2.style.marginLeft = (lowerSlider2.value * 10) + '%';
    rangeColor2.style.width = (upperSlider2.value * 10) - (lowerSlider2.value * 10) + '%';
    console.log('lower value: ' + lowerSlider2.value);
};

// as-range-color-2 filter end

// as-range-color-3 filter start

var lowerslider3 = document.querySelector('#lower3'); 
var upperslider3 = document.querySelector('#upper3'); 
var rangeColor3 = document.querySelector('#range-color3');

upperslider3.oninput = function() {
    lowerVal = parseInt(lowerslider3.value); 
    upperVal = parseInt(upperslider3.value);
     if (upperVal < lowerVal + 1) {
       lowerSlider.value = upperVal - 1;
        
        if (lowerVal == lowerslider3.min) {
           upperslider3.value = 1;
        }
    }

    rangeColor3.style.marginLeft = (lowerslider3.value * 10) + '%';
    rangeColor3.style.width = (upperslider3.value * 10) - (lowerslider3.value * 10) + '%';
   console.log('upper value: ' + upperslider3.value);
};

lowerslider3.oninput = function() {
    lowerVal = parseInt(lowerslider3.value); 
    upperVal = parseInt(upperslider3.value); 

   if (lowerVal > upperVal - 1) {
      upperslider3.value = lowerVal + 1;
     if (upperVal == upperslider3.max) {
    lowerslider3.value = parseInt(upperslider3.max) - 1;
        }

    }
    rangeColor3.style.marginLeft = (lowerslider3.value * 10) + '%';
    rangeColor3.style.width = (upperslider3.value * 10) - (lowerslider3.value * 10) + '%';
    console.log('lower value: ' + lowerslider3.value);
};

// as-range-color-3 filter end

// as-range-color-4 filter start

var lowerslider4 = document.querySelector('#lower4'); 
var upperslider4 = document.querySelector('#upper4'); 
var rangeColor4 = document.querySelector('#range-color4');

upperslider4.oninput = function() {
    lowerVal = parseInt(lowerslider4.value); 
    upperVal = parseInt(upperslider4.value);
     if (upperVal < lowerVal + 1) {
       lowerSlider.value = upperVal - 1;
        
        if (lowerVal == lowerslider4.min) {
           upperslider4.value = 1;
        }
    }

    rangeColor4.style.marginLeft = (lowerslider4.value * 10) + '%';
    rangeColor4.style.width = (upperslider4.value * 10) - (lowerslider4.value * 10) + '%';
   console.log('upper value: ' + upperslider4.value);
};

lowerslider4.oninput = function() {
    lowerVal = parseInt(lowerslider4.value); 
    upperVal = parseInt(upperslider4.value); 

   if (lowerVal > upperVal - 1) {
      upperslider4.value = lowerVal + 1;
     if (upperVal == upperslider4.max) {
    lowerslider4.value = parseInt(upperslider4.max) - 1;
        }

    }
    rangeColor4.style.marginLeft = (lowerslider4.value * 10) + '%';
    rangeColor4.style.width = (upperslider4.value * 10) - (lowerslider4.value * 10) + '%';
    console.log('lower value: ' + lowerslider4.value);
};

// as-range-color-4 filter end

// as-range-color-5 filter start

var lowerslider5 = document.querySelector('#lower5'); 
var upperslider5 = document.querySelector('#upper5'); 
var rangeColor5 = document.querySelector('#range-color5');

upperslider5.oninput = function() {
    lowerVal = parseInt(lowerslider5.value); 
    upperVal = parseInt(upperslider5.value);
     if (upperVal < lowerVal + 1) {
       lowerSlider.value = upperVal - 1;
        
        if (lowerVal == lowerslider5.min) {
           upperslider5.value = 1;
        }
    }

    rangeColor5.style.marginLeft = (lowerslider5.value * 10) + '%';
    rangeColor5.style.width = (upperslider5.value * 10) - (lowerslider5.value * 10) + '%';
   console.log('upper value: ' + upperslider5.value);
};

lowerslider5.oninput = function() {
    lowerVal = parseInt(lowerslider5.value); 
    upperVal = parseInt(upperslider5.value); 

   if (lowerVal > upperVal - 1) {
      upperslider5.value = lowerVal + 1;
     if (upperVal == upperslider5.max) {
    lowerslider5.value = parseInt(upperslider5.max) - 1;
        }

    }
    rangeColor5.style.marginLeft = (lowerslider5.value * 10) + '%';
    rangeColor5.style.width = (upperslider5.value * 10) - (lowerslider5.value * 10) + '%';
    console.log('lower value: ' + lowerslider5.value);
};

// as-range-color-5 filter end

// as-range-color-6 filter start

var lowerslider6 = document.querySelector('#lower6'); 
var upperslider6 = document.querySelector('#upper6'); 
var rangeColor6 = document.querySelector('#range-color6');

upperslider6.oninput = function() {
    lowerVal = parseInt(lowerslider6.value); 
    upperVal = parseInt(upperslider6.value);
     if (upperVal < lowerVal + 1) {
       lowerSlider.value = upperVal - 1;
        
        if (lowerVal == lowerslider6.min) {
           upperslider6.value = 1;
        }
    }

    rangeColor6.style.marginLeft = (lowerslider6.value * 10) + '%';
    rangeColor6.style.width = (upperslider6.value * 10) - (lowerslider6.value * 10) + '%';
   console.log('upper value: ' + upperslider6.value);
};

lowerslider6.oninput = function() {
    lowerVal = parseInt(lowerslider6.value); 
    upperVal = parseInt(upperslider6.value); 

   if (lowerVal > upperVal - 1) {
      upperslider6.value = lowerVal + 1;
     if (upperVal == upperslider6.max) {
    lowerslider6.value = parseInt(upperslider6.max) - 1;
        }

    }
    rangeColor6.style.marginLeft = (lowerslider6.value * 10) + '%';
    rangeColor6.style.width = (upperslider6.value * 10) - (lowerslider6.value * 10) + '%';
    console.log('lower value: ' + lowerslider6.value);
};

// as-range-color-6 filter end


// as-range-color-7  car-listing filter start

var lowerslider7 = document.querySelector('#lower7'); 
var upperslider7 = document.querySelector('#upper7'); 
var rangeColor7 = document.querySelector('#range-color7');

upperslider7.oninput = function() {
    lowerVal = parseInt(lowerslider7.value); 
    upperVal = parseInt(upperslider7.value);
     if (upperVal < lowerVal + 1) {
       lowerSlider.value = upperVal - 1;
        
        if (lowerVal == lowerslider7.min) {
           upperslider7.value = 1;
        }
    }

    rangeColor7.style.marginLeft = (lowerslider7.value * 10) + '%';
    rangeColor7.style.width = (upperslider7.value * 10) - (lowerslider7.value * 10) + '%';
   console.log('upper value: ' + upperslider7.value);
};

lowerslider7.oninput = function() {
    lowerVal = parseInt(lowerslider7.value); 
    upperVal = parseInt(upperslider7.value); 

   if (lowerVal > upperVal - 1) {
      upperslider7.value = lowerVal + 1;
     if (upperVal == upperslider7.max) {
    lowerslider7.value = parseInt(upperslider7.max) - 1;
        }

    }
    rangeColor7.style.marginLeft = (lowerslider7.value * 10) + '%';
    rangeColor7.style.width = (upperslider7.value * 10) - (lowerslider7.value * 10) + '%';
    console.log('lower value: ' + lowerslider7.value);
};

// as-range-color-7 car-listing filter end



// as-range-color-8  hotel-listing filter start

var lowerslider8 = document.querySelector('#lower8'); 
var upperslider8 = document.querySelector('#upper8'); 
var rangeColor8 = document.querySelector('#range-color8');

upperslider8.oninput = function() {
    lowerVal = parseInt(lowerslider8.value); 
    upperVal = parseInt(upperslider8.value);
     if (upperVal < lowerVal + 1) {
       lowerSlider.value = upperVal - 1;
        
        if (lowerVal == lowerslider8.min) {
           upperslider8.value = 1;
        }
    }

    rangeColor8.style.marginLeft = (lowerslider8.value * 10) + '%';
    rangeColor8.style.width = (upperslider8.value * 10) - (lowerslider8.value * 10) + '%';
   console.log('upper value: ' + upperslider8.value);
};

lowerslider8.oninput = function() {
    lowerVal = parseInt(lowerslider8.value); 
    upperVal = parseInt(upperslider8.value); 

   if (lowerVal > upperVal - 1) {
      upperslider8.value = lowerVal + 1;
     if (upperVal == upperslider8.max) {
    lowerslider8.value = parseInt(upperslider8.max) - 1;
        }

    }
    rangeColor8.style.marginLeft = (lowerslider8.value * 10) + '%';
    rangeColor8.style.width = (upperslider8.value * 10) - (lowerslider8.value * 10) + '%';
    console.log('lower value: ' + lowerslider8.value);
};

// as-range-color-8 hotel-listing filter end


$(document).ready(function () {


        if ($('.bbb_viewed_slider').length) {
            var viewedSlider = $('.bbb_viewed_slider');

            viewedSlider.owlCarousel({
                loop: true,
                margin: 0,
                autoplay: false,
                autoplayTimeout: 6000,
                nav: false,
                dots: false,
                responsive: {
                    0: {
                        items: 2
                    },
                    575: {
                        items: 2
                    },
                    768: {
                        items: 4
                    },
                    991: {
                        items: 6
                    },
                    1199: {
                        items: 6
                    }
                }
            });

            if ($('.bbb_viewed_prev').length) {
                var prev = $('.bbb_viewed_prev');
                prev.on('click', function () {
                    viewedSlider.trigger('prev.owl.carousel');
                });
            }

            if ($('.bbb_viewed_next').length) {
                var next = $('.bbb_viewed_next');
                next.on('click', function () {
                    viewedSlider.trigger('next.owl.carousel');
                });
            }
        }


    });


    