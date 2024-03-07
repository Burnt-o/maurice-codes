
**Todo:**


Performance:
 * replace background images with smaller file size jpgs -> actually webp with jpg backup


Minimalist design pass (on hero image and main background image).

Remove the animated bg lights from hero image and instead make the halo ring do that right-to-left effect.

Fix home/contact anchor tags.

Add robots.txt so stop images being crawled (ouch my bandwidth)

Replace "tag" button class with just a span or div but like same styling (confuses screenreaders/crawlers etc)

Defer non-criticle js/styles. mainly the projectinfo.css needs deferring cause it's huge (TODO: reduce max number of tags to reduce file size) https://www.giftofspeed.com/defer-loading-css/

MUST defer jquery shit, takes WAY too long (will mean deferring any scripts that use jquery too) (must remember to set default values for props like scroll-percent, aspect-ratio) https://stackoverflow.com/questions/5852767/possible-to-defer-loading-of-jquery

setup caching for images https://developer.chrome.com/docs/lighthouse/performance/uses-long-cache-ttl/?utm_source=lighthouse&utm_medium=lr