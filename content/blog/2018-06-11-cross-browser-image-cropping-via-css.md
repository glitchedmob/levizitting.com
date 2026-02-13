---
title: Cross Browser Image Cropping Via CSS
published: true
date: 2018-06-11T21:36:43-05:00
description: A cross browser method of cropping images on the frontend using CSS.
---

Cropping images on the web kind of sucks. You could, of course, open up your favorite image editor and use the crop feature to get the image just right. Or you could crop your images on the server before sending them to your user's browser. However, both of these methods fall apart when you bring responsiveness into the mix. 

One method that works great is the object-fit CSS property. This property allows an explicit width and height to be set on an image tag and the browser will automatically crop the image to fit in those dimensions without stretching the image. However, object-fit has one massive downfall. It doesn't work in internet explorer at all. 

For some of you this may not be a problem, but for the rest of us that have to support such an abomination, there are some alternatives.

Background Image

A super simple solution to this cropping issue can be solved by using background-image.

```html
<div class="image"></div>

<style>
    .image {
        width: 100px;
        height: 200px;
        background-image: url('https://i.imgur.com/jg0bGqX.jpg');
        background-size: cover;
        background-position: center;
    }
</style>
```

Setting the background-size: cover; property means that the image will cover the entire containing element, without stretching the image, but potentially cropping it along one of its axes. 

This method works really well but still has some drawbacks.

1. If the image URL is coming from your server, you have to fallback setting the background-image via a style attribute. Not the end of the world, but a little annoying.
2. Img tags are super easy to make accessible, but you could probably make the div used in the example accessible via some aria-labels.
3. There is a potential loss of SEO from not having an actual image tag. This one doesn't have a clear workaround and was the biggest pain point for me on a couple of recent projects.

Wrapping Element with a hidden overflow

```html
<div class="img-wrapper">
    <img src="https://i.redd.it/e3utgzi1aqt01.jpg" />
</div>

<style>
    .img-wrapper {
        position: relative;
        overflow: hidden;
        width: 200px;
        height: 150px;
    }
    
    .img-wrapper img {
        position: absolute;
        left: -10000%;
        right: -10000%;
        top: -10000%;
        bottom: -10000%;
        margin: auto;
        transform: scale(.1);
        min-width: 1000%;
        min-height: 1000%;
        max-width: 10000%;
        max-height: 10000%;
    }
</style>
```

Although this solution is a little more complicated, it works great. We start by wrapping the image tag in an element with an overflow hidden, and an explicit width and height. We also set the position to relative so that we can position the image tag absolutely inside of it.

On the image tag itself, we set the left, right, top, bottom, and margin properties are all working together to center the image inside of the wrapper. Lastly, we use a combination of min and max width and height along with a scale function to ensure that the image resizes appropriately. We're making sure that at a minimum the image stretches the entire container, and then giving it plenty of room to grow as well.

And there you have it, pure frontend image cropping that works in older versions of internet explorer as well as modern browsers. 

If you've found an easier, more concise way to solve this problem, be sure to hit me up me@levizitting.com