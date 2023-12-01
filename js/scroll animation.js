document.addEventListener('DOMContentLoaded', () => {
  
    let controller = new ScrollMagic.Controller();
    let timeline = new TimelineMax();    

    // Set initial position for .about_us_heading
    timeline.to('.about_us_heading', 0, {
        x: '100%', // Start offscreen to the left
        opacity: 0, // Make it invisible initially
        ease: Power3.easeInOut
    });

    // Animation for #first-animation_section
    timeline.from('#first-animation_section', 1, {
        y: 0,
        x: 0,
        ease: Power3.easeInOut
    });

    // Animation for .right_side_lorry
    timeline.to('.right_side_lorry', 0, { // Set the initial position
        x: '100%',
        ease: Power3.easeInOut
    })
    .fromTo('.right_side_lorry', 1, { // Move from right to left
        x: '100%',
        ease: Power3.easeInOut
    }, { 
        x: '0%',
        ease: Power3.easeInOut
    })
    .to('.right_side_lorry', 1, { // Move to the left after staying
        x: '-100%',
        ease: Power3.easeInOut
    })
    .to('.right_side_lorry', 1, { // Fade out
        opacity: 0,
        ease: Power3.easeInOut
    }, '-=1'); // Starts 1 second before the end of the previous animation

    // Animation for .another_element
    timeline.to('.another_element', 1, { // Fade out simultaneously
        opacity: 0,
        ease: Power3.easeInOut
    }, '-=1'); // Starts 1 second before the end of the previous animation

    // Animation for .about_us_heading to move to the center
    timeline.to('.about_us_heading', 1, {
        x: '0%', // Move to the center
        opacity: 1, // Make it visible
        ease: Power3.easeInOut
    }, '-=1'); // Starts 1 second before the end of the previous animation

    let scene1 = new ScrollMagic.Scene({
        triggerElement: '#first-animation_section',
        duration: '1000',
        triggerHook: 0,
        offset: '-50',
    })
    .setTween(timeline)
    .setPin('#first-animation_section')
    .addTo(controller);

    // Create a new timeline for #second-animation_section
    let timeline2 = new TimelineMax();

    // Set initial position for .about_us_heading in #second-animation_section
    timeline2.to('.about_us_heading', 0, {
        x: '-100%', // Start offscreen to the left
        opacity: 0, // Make it invisible initially
        ease: Power3.easeInOut
    });

    // Animation for #second-animation_section
    timeline2.from('#second-animation_section', 1, {
        y: 0,
        x: 0,
        ease: Power3.easeInOut
    });

    // Animation for .right_side_lorry in #second-animation_section
    timeline2.to('.right_side_lorry', 0, { // Set the initial position
        x: '100%',
        ease: Power3.easeInOut
    })
    .fromTo('.right_side_lorry', 1, { // Move from right to left
        x: '100%',
        ease: Power3.easeInOut
    }, { 
        x: '0%',
        ease: Power3.easeInOut
    })
    .to('.right_side_lorry', 1, { // Move to the left after staying
        x: '-100%',
        ease: Power3.easeInOut
    })
    .to('.right_side_lorry', 1, { // Fade out
        opacity: 0,
        ease: Power3.easeInOut
    }, '-=1'); // Starts 1 second before the end of the previous animation

    // Animation for .another_element in #second-animation_section
    timeline2.to('.another_element', 1, { // Fade out simultaneously
        opacity: 0,
        ease: Power3.easeInOut
    }, '-=1'); // Starts 1 second before the end of the previous animation

    // Animation for .about_us_heading in #second-animation_section to move to the center
    timeline2.to('.about_us_heading', 1, {
        x: '0%', // Move to the center
        opacity: 1, // Make it visible
        ease: Power3.easeInOut
    }, '-=1'); // Starts 1 second before the end of the previous animation

    let scene2 = new ScrollMagic.Scene({
        triggerElement: '#second-animation_section',
        duration: '1000',
        triggerHook: 0,
        offset: '-50',
    })
    .setTween(timeline2)
    .setPin('#second-animation_section')
    .addTo(controller);
});
