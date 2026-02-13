---
title: Responsive Text Truncation using CSS's text-overflow Property
published: true
date: 2018-05-13T17:31:01-05:00
description: A quick guide covering the basics of the css text-overflow property, as well as some potential pitfalls you might run into while using it.
---

Let me set the stage real quick. You're working on some kind of list view, such as a list of blog posts or product descriptions. Now these list items can come with lots of information and metadata. Generally, you only want to show a subset of this information to your users while in the list view as to not overload them with information. Lots of times this means truncating the text of large sections, such as the description, and adding an ellipsis (...) to the end to indicate that there is more content available. 

This solution works, but not extremely well. Once we start thinking about responsiveness, this basic text truncation can begin to cause issues. On larger screens we may have some extra space, while on mobile we may have too little space causing our truncated text to wrap onto multiple lines.

What we really need, is a way to truncate text dynamically depending on the size of the container of our text. Luckily CSS provides a fairly straight forward way to do this, introducing `text-overflow`.

On it's own, `text-overflow` doesn't do much. It works together with two other properties `overflow: hidden;` and `white-space: nowrap;`. Let's start by breaking these down.

Many of you may already be familiar with `overflow: hidden;`. It's fairly straight forward. When applying this property to an element, that element's children will not be able to change the parent's width, and will instead be clipped out. 

The `white-space: nowrap;` property prevents text from wrapping onto multiple lines no matter how many characters. The only thing that will force a line break when using this property is a `<br>` tag. 

Now, let's jump into `text-overflow` by looking at an example. Let's assume we have this markup

```html
<div class="wrapper">
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.</p>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.</p>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.</p>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.</p>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.</p>
</div>
```

And this css.

```css
.wrapper p {
  width: 25%;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
```

And...Tada!

![](/images/uploads/text-overflow-demo-screenshiot-01.jpg)

Our text is being truncated via css. Also, as we resize our browser window, we'll begin to see the amount of text shown automatically adjust itself.

Most of the time, this is all you need to know in order to use this technique. However, I did come across an edge case when I was trying to use this in a recent project.

Let's assume this markup

```html
<div class="flex">
  <div class="wrapper">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi.</p>
  </div>
  <div class="wrapper">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi.</p>
  </div>
</div>
```
And this css.

```css
.flex {
  display: flex;
  width: 300px;
}
  
.wrapper {
  flex-basis: 50%;
}
  
p {
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
```

This seems like it should work. However, what actually happens is that the width of the paragraph tags becomes the width of the text itself and completely ignores the explicit width that we've set on both of that element's containers. 

The fix is pretty simple, just add `overflow: hidden;` to the offending element's parent. In this case that would be the div with a class of wrapper.

And there you have it, a simple way to make text truncation a whole lot more dynamic!