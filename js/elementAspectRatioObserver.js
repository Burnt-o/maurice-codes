
// run once at start
setAspectRatio();

window.addEventListener(
    "resize",
    () => {
        setAspectRatio();
    },
    false
    );


    // sets the --child-aspect-ratio property on elements with class observe-child-aspect-ratio.
    // This measures the aspect ratio of the FIRST child element.
    // Intended for use with clip-path css where I want to maintain consistent angles (ie 45deg diagonals)
function setAspectRatio()
{
    document.querySelectorAll('.observe-child-aspect-ratio').forEach(el => {

        let maybeChild = el.firstElementChild;
        if (maybeChild != null)
        {
            let childAspectRatio = maybeChild.clientWidth / maybeChild.clientHeight;
            el.style.setProperty(
                "--child-aspect-ratio",
                childAspectRatio
                    );
                
        }
        
    });

}