
// run once at start
setScreenAspectRatio();

window.addEventListener(
    "resize",
    () => {
        setScreenAspectRatio();
    },
    false
    );


    // sets the --screen-aspect-ratio property on elements with class observe-screen-aspect-ratio.
    // This measures the aspect ratio of the entire screen
function setScreenAspectRatio()
{
    let screenAspectRatio = screen.width / screen.height;
    console.log(screenAspectRatio);
    document.querySelectorAll('.observe-screen-aspect-ratio').forEach(el => {


            el.style.setProperty(
                "--screen-aspect-ratio",
                screenAspectRatio
                    );
                
    });

}