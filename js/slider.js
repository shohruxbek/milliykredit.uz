var slideNumber = 0,
    nextSlide = 1,


    wrapper = $("#slider-wrapper"),

    // menu elements
    menuLi = $("#menu li"),

    // slides
    slides = $(".slide"),
    totalSlides = slides.length,

    // define a dynamic pause time just in case
    pauseTime = 2,
    // define the slide animation duration
    duration = 1,
    // timer function that will be paused on mouse event, mainly mouse over. this also will be killed on click event
    timerFunction = TweenLite.delayedCall(pauseTime, changeSlide),

    // boolean to inform if there's a slide currently animating. useful for the click events. if a slide is animating the click event won't work as expected, it won't trigger the function to change the slide. if no slide is animating the slide corresponding to the button's index will be animated
    slideAnimating = false;

// set the initial position of the slides to the left of the container. the first slide won't be considered because is the visible slide when the effect starts
TweenLite.set(slides.not(":eq(0)"), {left:"100%"});
TweenLite.set(menuLi[0], {backgroundColor:"#222"});

function changeSlide()
{
  // set the boolean to indicate that a slide is currently animating. prevents the click button to call the function while a slide is animating
  slideAnimating = true;

  var menuLine = new TimelineLite();

  console.log( "slide out => " + slideNumber );
  console.log( "slide IN => " + nextSlide + "\n" );
  // this will animate the menu item background color
  menuLine
    .to(menuLi[slideNumber], duration,
      {
        backgroundColor:"#555", className:"+=active"
      },0)
    .to(menuLi[nextSlide], duration,
      {
        backgroundColor:"#222", className:"+=active"
      },0);

  // this will animate the currently visible slide to the far left.
  TweenLite.to(slides[slideNumber], duration,
    {
      left:"-100%",
      onComplete:function()
      {
        // the slide animation is complete. change the boolean to indicate that no slide is animating. the click event on a button will trigger the animation on the corresponding slide
        slideAnimating = false;
                
        // if the mouse is over during the slide animation it should be paused right after being created and resumed once the mouse leaves the container to resume the autoplay feature.
        // here there's has to be some conditional logic to prevent the timer to start again if the mouse is over the container, for that check the special class added to the 
        timerFunction.restart(true);

        // check if the mouse is on the element, therefore the timer function should be paused immediately. the mouseover event pauses the timer function, but if mouse goes over the container while the slide was animating the timer function will start even with the mouse in the container. to prevent that a class is added to the container, if it has that class the timer should be paused.
        if( wrapper.hasClass( "mouse-over" ) )
        {
          timerFunction.pause();
        }

        // finally set the slide that was animated out to the far right of the container
        TweenLite.set(this.target, {left:"100%"});
      }// ON COMPLETE CALLBACK END
    });//CURRENTLY VISIBLE SLIDE ANIMATION END
  
  // NEXT SLIDE ANIMATION START
  TweenLite.to(slides[nextSlide], duration,
    {
      left:"3%"
    });

  // 
  if( nextSlide < totalSlides -1 )
  {
    // set the index of the slide that will be animated-out in the next execution
    slideNumber = nextSlide;

    // set the index of the slide that will be animated-in in hte next execution
    nextSlide++;
  }
  else
  {
    // set the index of the slide that will be animated-out in the next execution
    slideNumber = nextSlide;
    // if the visible slide is the last one set the index for the slide that will be animated-in to 0, that means the first slide
    nextSlide = 0;
    console.log("first slide!!");
  }

}

/*
---------------------------------------------------
    MOUSE OVER AND OUT EVENTS
---------------------------------------------------
*/
// in order to check if the mouse is over when the slide is animating add a class to the container.

wrapper.mouseover(function(e)
{
  TweenLite.set(this, {className:"+=mouse-over"});
  timerFunction.pause();
});

wrapper.mouseout(function(e)
{
  TweenLite.set(this, {className:"-=mouse-over"});
  timerFunction.play();
});



/*
---------------------------------------------------
        MENU ITEM CLICK EVENT
---------------------------------------------------
*/
$.each(menuLi, function(i,e)
{
  var hoverLine = new TimelineLite({paused:true});

  hoverLine.to(e, .3, {backgroundColor:"#222"});

  e.hoverLine = hoverLine;
});

menuLi.click(function(e)
{
  console.log( slideAnimating );

  // get the button being clicked index position. this will be set as the slide to be animated.
  var btnIndex = menuLi.index(this);

  // if there's no slide animating pause the timer function. select the button's index and set the slide number according to it. call the function to animate in the corresponding slide and finally restart the timer fuction to cntinue with the autoplay feature. also avoid executing the function if the user clicks on the button corresponding to the currently visible slide
  if(!slideAnimating && btnIndex !== slideNumber)
  {
    // pause the timer function. with this avoid the slide being animated out too soon. if the timer has advanced for some time the slider being animated-in by the click event, will be visible for less time than the expected. unwanted behaviour. the timer function will be restarted in the change slide function so the pause time between slides animations will be the usual one.
    timerFunction.pause();

    // set the correct index to show the slide corresponding to the button being clicked. otherwise the slide animated in will be the next one sequentially and not necesarly the one indicated by the button's index position
    nextSlide = btnIndex;

    // call the function to change animate the slides
    changeSlide();
  }
})
// hover event for menu items
.mouseover(function(e)
{
  this.hoverLine.play();
})
.mouseout(function(e)
{
  this.hoverLine.reverse();
});