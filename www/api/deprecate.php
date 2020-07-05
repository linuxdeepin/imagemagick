



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" >
  <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1,shrink-to-fit=no" >
  <title>MagickCore, C API: Deprecated Methods @ ImageMagick</title>
  <meta name="application-name" content="ImageMagick">
  <meta name="description" content="Use ImageMagick® to create, edit, compose, convert bitmap images. With ImageMagick you can resize your image, crop it, change its shades and colors, add captions, among other operations.">
  <meta name="application-url" content="https://imagemagick.org">
  <meta name="generator" content="PHP">
  <meta name="keywords" content="magickcore, c, api:, deprecated, methods, ImageMagick, PerlMagick, image processing, image, photo, software, Magick++, OpenMP, convert">
  <meta name="rating" content="GENERAL">
  <meta name="robots" content="INDEX, FOLLOW">
  <meta name="generator" content="ImageMagick Studio LLC">
  <meta name="author" content="ImageMagick Studio LLC">
  <meta name="revisit-after" content="2 DAYS">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Copyright (c) 1999-2017 ImageMagick Studio LLC">
  <meta name="distribution" content="Global">
  <meta name="magick-serial" content="P131-S030410-R485315270133-P82224-A6668-G1245-1">
  <meta name="google-site-verification" content="_bMOCDpkx9ZAzBwb2kF3PRHbfUUdFj2uO8Jd1AXArz4">
  <link href="https://imagemagick.org/api/deprecate.php" rel="canonical">
  <link href="../image/wand.png" rel="icon">
  <link href="../image/wand.ico" rel="shortcut icon">
  <link href="../assets/magick-css.php" rel="stylesheet">
</head>
<body>
  <header>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="../index.html"><img class="d-block" id="wand" alt="ImageMagick" width="32" height="32" src="../image/wand.ico"/></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse" id="navbarsExampleDefault" style="">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="../script/download.php">Download</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="../script/command-line-tools.php">Tools</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="../script/command-line-processing.php">Command-line</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="../script/resources.php">Resources</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="../script/develop.php">Develop</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" target="_blank" href="https://imagemagick.org/discourse-server/">Community</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="../script/search.php">
      <input class="form-control mr-sm-2" type="text" name="q" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="sa">Search</button>
    </form>
    </div>
  </nav>
  <div class="container">
   <script async="async" src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>    <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="ca-pub-3129977114552745"
         data-ad-slot="6345125851"
         data-ad-format="auto"></ins>
    <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
  </div>
  </header>
  <main class="container">
    <div class="magick-template">
<div class="magick-header">
<p class="text-center"><a href="deprecate.php#MagickAverageImages">MagickAverageImages</a> &bull; <a href="deprecate.php#ClonePixelView">ClonePixelView</a> &bull; <a href="deprecate.php#DestroyPixelView">DestroyPixelView</a> &bull; <a href="deprecate.php#DuplexTransferPixelViewIterator">DuplexTransferPixelViewIterator</a> &bull; <a href="deprecate.php#GetPixelViewException">GetPixelViewException</a> &bull; <a href="deprecate.php#GetPixelViewHeight">GetPixelViewHeight</a> &bull; <a href="deprecate.php#GetPixelViewIterator">GetPixelViewIterator</a> &bull; <a href="deprecate.php#GetPixelViewPixels">GetPixelViewPixels</a> &bull; <a href="deprecate.php#GetPixelViewWand">GetPixelViewWand</a> &bull; <a href="deprecate.php#GetPixelViewWidth">GetPixelViewWidth</a> &bull; <a href="deprecate.php#GetPixelViewX">GetPixelViewX</a> &bull; <a href="deprecate.php#GetPixelViewY">GetPixelViewY</a> &bull; <a href="deprecate.php#IsPixelView">IsPixelView</a> &bull; <a href="deprecate.php#MagickClipPathImage">MagickClipPathImage</a> &bull; <a href="deprecate.php#DrawGetFillAlpha">DrawGetFillAlpha</a> &bull; <a href="deprecate.php#DrawGetStrokeAlpha">DrawGetStrokeAlpha</a> &bull; <a href="deprecate.php#DrawPeekGraphicWand">DrawPeekGraphicWand</a> &bull; <a href="deprecate.php#DrawPopGraphicContext">DrawPopGraphicContext</a> &bull; <a href="deprecate.php#DrawPushGraphicContext">DrawPushGraphicContext</a> &bull; <a href="deprecate.php#DrawSetFillAlpha">DrawSetFillAlpha</a> &bull; <a href="deprecate.php#DrawSetStrokeAlpha">DrawSetStrokeAlpha</a> &bull; <a href="deprecate.php#MagickColorFloodfillImage">MagickColorFloodfillImage</a> &bull; <a href="deprecate.php#MagickDescribeImage">MagickDescribeImage</a> &bull; <a href="deprecate.php#MagickFlattenImages">MagickFlattenImages</a> &bull; <a href="deprecate.php#MagickGetImageAttribute">MagickGetImageAttribute</a> &bull; <a href="deprecate.php#MagickGetImageMatte">MagickGetImageMatte</a> &bull; <a href="deprecate.php#MagickGetImagePixels">MagickGetImagePixels</a> &bull; <a href="deprecate.php#MagickGetImageSize">MagickGetImageSize</a> &bull; <a href="deprecate.php#MagickMapImage">MagickMapImage</a> &bull; <a href="deprecate.php#MagickMatteFloodfillImage">MagickMatteFloodfillImage</a> &bull; <a href="deprecate.php#MagickMedianFilterImage">MagickMedianFilterImage</a> &bull; <a href="deprecate.php#MagickMinimumImages">MagickMinimumImages</a> &bull; <a href="deprecate.php#MagickModeImage">MagickModeImage</a> &bull; <a href="deprecate.php#MagickMosaicImages">MagickMosaicImages</a> &bull; <a href="deprecate.php#MagickOpaqueImage">MagickOpaqueImage</a> &bull; <a href="deprecate.php#MagickPaintFloodfillImage">MagickPaintFloodfillImage</a> &bull; <a href="deprecate.php#MagickPaintOpaqueImage">MagickPaintOpaqueImage</a> &bull; <a href="deprecate.php#MagickPaintTransparentImage">MagickPaintTransparentImage</a> &bull; <a href="deprecate.php#MagickRadialBlurImage">MagickRadialBlurImage</a> &bull; <a href="deprecate.php#MagickRecolorImage">MagickRecolorImage</a> &bull; <a href="deprecate.php#MagickReduceNoiseImage">MagickReduceNoiseImage</a> &bull; <a href="deprecate.php#MagickMaximumImages">MagickMaximumImages</a> &bull; <a href="deprecate.php#MagickSetImageAttribute">MagickSetImageAttribute</a> &bull; <a href="deprecate.php#MagickSetImageIndex">MagickSetImageIndex</a> &bull; <a href="deprecate.php#MagickTransparentImage">MagickTransparentImage</a> &bull; <a href="deprecate.php#MagickRegionOfInterestImage">MagickRegionOfInterestImage</a> &bull; <a href="deprecate.php#MagickSetImagePixels">MagickSetImagePixels</a> &bull; <a href="deprecate.php#MagickWriteImageBlob">MagickWriteImageBlob</a> &bull; <a href="deprecate.php#NewPixelView">NewPixelView</a> &bull; <a href="deprecate.php#NewPixelViewRegion">NewPixelViewRegion</a> &bull; <a href="deprecate.php#PixelGetNextRow">PixelGetNextRow</a> &bull; <a href="deprecate.php#PixelIteratorGetException">PixelIteratorGetException</a> &bull; <a href="deprecate.php#SetPixelViewIterator">SetPixelViewIterator</a> &bull; <a href="deprecate.php#TransferPixelViewIterator">TransferPixelViewIterator</a> &bull; <a href="deprecate.php#UpdatePixelViewIterator">UpdatePixelViewIterator</a></p>

<h2><a href="https://imagemagick.org/api/MagickWand/deprecate_8c.html" id="MagickAverageImages">MagickAverageImages</a></h2>

<p>MagickAverageImages() average a set of images.</p>

<p>The format of the MagickAverageImages method is:</p>

<pre class="text">
MagickWand *MagickAverageImages(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>wand</dt>
<dd>the magick wand. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickWand/deprecate_8c.html" id="ClonePixelView">ClonePixelView</a></h2>

<p>ClonePixelView() makes a copy of the specified pixel view.</p>

<p>The format of the ClonePixelView method is:</p>

<pre class="text">
PixelView *ClonePixelView(const PixelView *pixel_view)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>pixel_view</dt>
<dd>the pixel view. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickWand/deprecate_8c.html" id="DestroyPixelView">DestroyPixelView</a></h2>

<p>DestroyPixelView() deallocates memory associated with a pixel view.</p>

<p>The format of the DestroyPixelView method is:</p>

<pre class="text">
PixelView *DestroyPixelView(PixelView *pixel_view,
  const size_t number_wands,const size_t number_threads)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>pixel_view</dt>
<dd>the pixel view. </dd>

<dd> </dd>
<dt>number_wand</dt>
<dd>the number of pixel wands. </dd>

<dd> </dd>
<dt>number_threads</dt>
<dd>number of threads. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickWand/deprecate_8c.html" id="DuplexTransferPixelViewIterator">DuplexTransferPixelViewIterator</a></h2>

<p>DuplexTransferPixelViewIterator() iterates over three pixel views in parallel and calls your transfer method for each scanline of the view.  The source and duplex pixel region is not confined to the image canvas-- that is you can include negative offsets or widths or heights that exceed the image dimension.  However, the destination pixel view is confined to the image canvas-- that is no negative offsets or widths or heights that exceed the image dimension are permitted.</p>

<p>Use this pragma:</p>

<pre class="text">
    #pragma omp critical
</pre>

<p>to define a section of code in your callback transfer method that must be executed by a single thread at a time.</p>

<p>The format of the DuplexTransferPixelViewIterator method is:</p>

<pre class="text">
MagickBooleanType DuplexTransferPixelViewIterator(PixelView *source,
  PixelView *duplex,PixelView *destination,
  DuplexTransferPixelViewMethod transfer,void *context)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>source</dt>
<dd>the source pixel view. </dd>

<dd> </dd>
<dt>duplex</dt>
<dd>the duplex pixel view. </dd>

<dd> </dd>
<dt>destination</dt>
<dd>the destination pixel view. </dd>

<dd> </dd>
<dt>transfer</dt>
<dd>the transfer callback method. </dd>

<dd> </dd>
<dt>context</dt>
<dd>the user defined context. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickWand/deprecate_8c.html" id="GetPixelViewException">GetPixelViewException</a></h2>

<p>GetPixelViewException() returns the severity, reason, and description of any error that occurs when utilizing a pixel view.</p>

<p>The format of the GetPixelViewException method is:</p>

<pre class="text">
char *GetPixelViewException(const PixelWand *pixel_view,
  ExceptionType *severity)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>pixel_view</dt>
<dd>the pixel pixel_view. </dd>

<dd> </dd>
<dt>severity</dt>
<dd>the severity of the error is returned here. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickWand/deprecate_8c.html" id="GetPixelViewHeight">GetPixelViewHeight</a></h2>

<p>GetPixelViewHeight() returns the pixel view height.</p>

<p>The format of the GetPixelViewHeight method is:</p>

<pre class="text">
size_t GetPixelViewHeight(const PixelView *pixel_view)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>pixel_view</dt>
<dd>the pixel view. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickWand/deprecate_8c.html" id="GetPixelViewIterator">GetPixelViewIterator</a></h2>

<p>GetPixelViewIterator() iterates over the pixel view in parallel and calls your get method for each scanline of the view.  The pixel region is not confined to the image canvas-- that is you can include negative offsets or widths or heights that exceed the image dimension.  Any updates to the pixels in your callback are ignored.</p>

<p>Use this pragma:</p>

<pre class="text">
    #pragma omp critical
</pre>

<p>to define a section of code in your callback get method that must be executed by a single thread at a time.</p>

<p>The format of the GetPixelViewIterator method is:</p>

<pre class="text">
MagickBooleanType GetPixelViewIterator(PixelView *source,
  GetPixelViewMethod get,void *context)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>source</dt>
<dd>the source pixel view. </dd>

<dd> </dd>
<dt>get</dt>
<dd>the get callback method. </dd>

<dd> </dd>
<dt>context</dt>
<dd>the user defined context. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickWand/deprecate_8c.html" id="GetPixelViewPixels">GetPixelViewPixels</a></h2>

<p>GetPixelViewPixels() returns the pixel view pixel_wands.</p>

<p>The format of the GetPixelViewPixels method is:</p>

<pre class="text">
PixelWand *GetPixelViewPixels(const PixelView *pixel_view)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>pixel_view</dt>
<dd>the pixel view. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickWand/deprecate_8c.html" id="GetPixelViewWand">GetPixelViewWand</a></h2>

<p>GetPixelViewWand() returns the magick wand associated with the pixel view.</p>

<p>The format of the GetPixelViewWand method is:</p>

<pre class="text">
MagickWand *GetPixelViewWand(const PixelView *pixel_view)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>pixel_view</dt>
<dd>the pixel view. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickWand/deprecate_8c.html" id="GetPixelViewWidth">GetPixelViewWidth</a></h2>

<p>GetPixelViewWidth() returns the pixel view width.</p>

<p>The format of the GetPixelViewWidth method is:</p>

<pre class="text">
size_t GetPixelViewWidth(const PixelView *pixel_view)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>pixel_view</dt>
<dd>the pixel view. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickWand/deprecate_8c.html" id="GetPixelViewX">GetPixelViewX</a></h2>

<p>GetPixelViewX() returns the pixel view x offset.</p>

<p>The format of the GetPixelViewX method is:</p>

<pre class="text">
ssize_t GetPixelViewX(const PixelView *pixel_view)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>pixel_view</dt>
<dd>the pixel view. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickWand/deprecate_8c.html" id="GetPixelViewY">GetPixelViewY</a></h2>

<p>GetPixelViewY() returns the pixel view y offset.</p>

<p>The format of the GetPixelViewY method is:</p>

<pre class="text">
ssize_t GetPixelViewY(const PixelView *pixel_view)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>pixel_view</dt>
<dd>the pixel view. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickWand/deprecate_8c.html" id="IsPixelView">IsPixelView</a></h2>

<p>IsPixelView() returns MagickTrue if the the parameter is verified as a pixel view container.</p>

<p>The format of the IsPixelView method is:</p>

<pre class="text">
MagickBooleanType IsPixelView(const PixelView *pixel_view)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>pixel_view</dt>
<dd>the pixel view. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickWand/deprecate_8c.html" id="MagickClipPathImage">MagickClipPathImage</a></h2>

<p>MagickClipPathImage() clips along the named paths from the 8BIM profile, if present. Later operations take effect inside the path.  Id may be a number if preceded with #, to work on a numbered path, e.g., "#1" to use the first path.</p>

<p>The format of the MagickClipPathImage method is:</p>

<pre class="text">
MagickBooleanType MagickClipPathImage(MagickWand *wand,
  const char *pathname,const MagickBooleanType inside)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>wand</dt>
<dd>the magick wand. </dd>

<dd> </dd>
<dt>pathname</dt>
<dd>name of clipping path resource. If name is preceded by #, use clipping path numbered by name. </dd>

<dd> </dd>
<dt>inside</dt>
<dd>if non-zero, later operations take effect inside clipping path. Otherwise later operations take effect outside clipping path. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickWand/deprecate_8c.html" id="DrawGetFillAlpha">DrawGetFillAlpha</a></h2>

<p>DrawGetFillAlpha() returns the alpha used when drawing using the fill color or fill texture.  Fully opaque is 1.0.</p>

<p>The format of the DrawGetFillAlpha method is:</p>

<pre class="text">
double DrawGetFillAlpha(const DrawingWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>wand</dt>
<dd>the drawing wand. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickWand/deprecate_8c.html" id="DrawGetStrokeAlpha">DrawGetStrokeAlpha</a></h2>

<p>DrawGetStrokeAlpha() returns the alpha of stroked object outlines.</p>

<p>The format of the DrawGetStrokeAlpha method is:</p>

<pre class="text">
double DrawGetStrokeAlpha(const DrawingWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>wand</dt>
<dd>the drawing wand.  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickWand/deprecate_8c.html" id="DrawPeekGraphicWand">DrawPeekGraphicWand</a></h2>

<p>DrawPeekGraphicWand() returns the current drawing wand.</p>

<p>The format of the PeekDrawingWand method is:</p>

<pre class="text">
DrawInfo *DrawPeekGraphicWand(const DrawingWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>wand</dt>
<dd>the drawing wand. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickWand/deprecate_8c.html" id="DrawPopGraphicContext">DrawPopGraphicContext</a></h2>

<p>DrawPopGraphicContext() destroys the current drawing wand and returns to the previously pushed drawing wand. Multiple drawing wands may exist. It is an error to attempt to pop more drawing wands than have been pushed, and it is proper form to pop all drawing wands which have been pushed.</p>

<p>The format of the DrawPopGraphicContext method is:</p>

<pre class="text">
MagickBooleanType DrawPopGraphicContext(DrawingWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>wand</dt>
<dd>the drawing wand. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickWand/deprecate_8c.html" id="DrawPushGraphicContext">DrawPushGraphicContext</a></h2>

<p>DrawPushGraphicContext() clones the current drawing wand to create a new drawing wand.  The original drawing wand(s) may be returned to by invoking PopDrawingWand().  The drawing wands are stored on a drawing wand stack.  For every Pop there must have already been an equivalent Push.</p>

<p>The format of the DrawPushGraphicContext method is:</p>

<pre class="text">
MagickBooleanType DrawPushGraphicContext(DrawingWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>wand</dt>
<dd>the drawing wand. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickWand/deprecate_8c.html" id="DrawSetFillAlpha">DrawSetFillAlpha</a></h2>

<p>DrawSetFillAlpha() sets the alpha to use when drawing using the fill color or fill texture.  Fully opaque is 1.0.</p>

<p>The format of the DrawSetFillAlpha method is:</p>

<pre class="text">
void DrawSetFillAlpha(DrawingWand *wand,const double fill_alpha)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>wand</dt>
<dd>the drawing wand. </dd>

<dd> </dd>
<dt>fill_alpha</dt>
<dd>fill alpha </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickWand/deprecate_8c.html" id="DrawSetStrokeAlpha">DrawSetStrokeAlpha</a></h2>

<p>DrawSetStrokeAlpha() specifies the alpha of stroked object outlines.</p>

<p>The format of the DrawSetStrokeAlpha method is:</p>

<pre class="text">
void DrawSetStrokeAlpha(DrawingWand *wand,const double stroke_alpha)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>wand</dt>
<dd>the drawing wand. </dd>

<dd> </dd>
<dt>stroke_alpha</dt>
<dd>stroke alpha.  The value 1.0 is opaque. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickWand/deprecate_8c.html" id="MagickColorFloodfillImage">MagickColorFloodfillImage</a></h2>

<p>MagickColorFloodfillImage() changes the color value of any pixel that matches target and is an immediate neighbor.  If the method FillToBorderMethod is specified, the color value is changed for any neighbor pixel that does not match the bordercolor member of image.</p>

<p>The format of the MagickColorFloodfillImage method is:</p>

<pre class="text">
MagickBooleanType MagickColorFloodfillImage(MagickWand *wand,
  const PixelWand *fill,const double fuzz,const PixelWand *bordercolor,
  const ssize_t x,const ssize_t y)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>wand</dt>
<dd>the magick wand. </dd>

<dd> </dd>
<dt>fill</dt>
<dd>the floodfill color pixel wand. </dd>

<dd> </dd>
<dt>fuzz</dt>
<dd>By default target must match a particular pixel color exactly.  However, in many cases two colors may differ by a small amount. The fuzz member of image defines how much tolerance is acceptable to consider two colors as the same.  For example, set fuzz to 10 and the color red at intensities of 100 and 102 respectively are now interpreted as the same color for the purposes of the floodfill. </dd>

<dd> </dd>
<dt>bordercolor</dt>
<dd>the border color pixel wand. </dd>

<dd> </dd>
<dt>x,y</dt>
<dd>the starting location of the operation. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickWand/deprecate_8c.html" id="MagickDescribeImage">MagickDescribeImage</a></h2>

<p>MagickDescribeImage() identifies an image by printing its attributes to the file.  Attributes include the image width, height, size, and others.</p>

<p>The format of the MagickDescribeImage method is:</p>

<pre class="text">
const char *MagickDescribeImage(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>wand</dt>
<dd>the magick wand. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickWand/deprecate_8c.html" id="MagickFlattenImages">MagickFlattenImages</a></h2>

<p>MagickFlattenImages() merges a sequence of images.  This useful for combining Photoshop layers into a single image.</p>

<p>The format of the MagickFlattenImages method is:</p>

<pre class="text">
MagickWand *MagickFlattenImages(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>wand</dt>
<dd>the magick wand. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickWand/deprecate_8c.html" id="MagickGetImageAttribute">MagickGetImageAttribute</a></h2>

<p>MagickGetImageAttribute() returns a value associated with the specified property.  Use MagickRelinquishMemory() to free the value when you are finished with it.</p>

<p>The format of the MagickGetImageAttribute method is:</p>

<pre class="text">
char *MagickGetImageAttribute(MagickWand *wand,const char *property)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>wand</dt>
<dd>the magick wand. </dd>

<dd> </dd>
<dt>property</dt>
<dd>the property. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickWand/deprecate_8c.html" id="MagickGetImageMatte">MagickGetImageMatte</a></h2>

<p>MagickGetImageMatte() returns MagickTrue if the image has a matte channel otherwise MagickFalse.</p>

<p>The format of the MagickGetImageMatte method is:</p>

<pre class="text">
size_t MagickGetImageMatte(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>wand</dt>
<dd>the magick wand. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickWand/deprecate_8c.html" id="MagickGetImagePixels">MagickGetImagePixels</a></h2>

<p>MagickGetImagePixels() extracts pixel data from an image and returns it to you.  The method returns MagickTrue on success otherwise MagickFalse if an error is encountered.  The data is returned as char, short int, int, ssize_t, float, or double in the order specified by map.</p>

<p>Suppose you want to extract the first scanline of a 640x480 image as character data in red-green-blue order:</p>

<pre class="text">
MagickGetImagePixels(wand,0,0,640,1,"RGB",CharPixel,pixels);
</pre>

<p>The format of the MagickGetImagePixels method is:</p>

<pre class="text">
MagickBooleanType MagickGetImagePixels(MagickWand *wand,
  const ssize_t x,const ssize_t y,const size_t columns,
  const size_t rows,const char *map,const StorageType storage,
  void *pixels)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>wand</dt>
<dd>the magick wand. </dd>

<dd> </dd>
<dt>x, y, columns, rows</dt>
<dd> These values define the perimeter of a region of pixels you want to extract. </dd>

<dd> </dd>
<dt>map</dt>
<dd> This string reflects the expected ordering of the pixel array. It can be any combination or order of R = red, G = green, B = blue, A = alpha (0 is transparent), O = opacity (0 is opaque), C = cyan, Y = yellow, M = magenta, K = black, I = intensity (for grayscale), P = pad. </dd>

<dd> </dd>
<dt>storage</dt>
<dd>Define the data type of the pixels.  Float and double types are expected to be normalized [0..1] otherwise [0..QuantumRange].  Choose from these types: CharPixel, DoublePixel, FloatPixel, IntegerPixel, LongPixel, QuantumPixel, or ShortPixel. </dd>

<dd> </dd>
<dt>pixels</dt>
<dd>This array of values contain the pixel components as defined by map and type.  You must preallocate this array where the expected length varies depending on the values of width, height, map, and type. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickWand/deprecate_8c.html" id="MagickGetImageSize">MagickGetImageSize</a></h2>

<p>MagickGetImageSize() returns the image length in bytes.</p>

<p>The format of the MagickGetImageSize method is:</p>

<pre class="text">
MagickBooleanType MagickGetImageSize(MagickWand *wand,
  MagickSizeType *length)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>wand</dt>
<dd>the magick wand. </dd>

<dd> </dd>
<dt>length</dt>
<dd>the image length in bytes. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickWand/deprecate_8c.html" id="MagickMapImage">MagickMapImage</a></h2>

<p>MagickMapImage() replaces the colors of an image with the closest color from a reference image.</p>

<p>The format of the MagickMapImage method is:</p>

<pre class="text">
MagickBooleanType MagickMapImage(MagickWand *wand,
  const MagickWand *map_wand,const MagickBooleanType dither)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>wand</dt>
<dd>the magick wand. </dd>

<dd> </dd>
<dt>map</dt>
<dd>the map wand. </dd>

<dd> </dd>
<dt>dither</dt>
<dd>Set this integer value to something other than zero to dither the mapped image. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickWand/deprecate_8c.html" id="MagickMatteFloodfillImage">MagickMatteFloodfillImage</a></h2>

<p>MagickMatteFloodfillImage() changes the transparency value of any pixel that matches target and is an immediate neighbor.  If the method FillToBorderMethod is specified, the transparency value is changed for any neighbor pixel that does not match the bordercolor member of image.</p>

<p>The format of the MagickMatteFloodfillImage method is:</p>

<pre class="text">
MagickBooleanType MagickMatteFloodfillImage(MagickWand *wand,
  const double alpha,const double fuzz,const PixelWand *bordercolor,
  const ssize_t x,const ssize_t y)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>wand</dt>
<dd>the magick wand. </dd>

<dd> </dd>
<dt>alpha</dt>
<dd>the level of transparency: 1.0 is fully opaque and 0.0 is fully transparent. </dd>

<dd> </dd>
<dt>fuzz</dt>
<dd>By default target must match a particular pixel color exactly.  However, in many cases two colors may differ by a small amount. The fuzz member of image defines how much tolerance is acceptable to consider two colors as the same.  For example, set fuzz to 10 and the color red at intensities of 100 and 102 respectively are now interpreted as the same color for the purposes of the floodfill. </dd>

<dd> </dd>
<dt>bordercolor</dt>
<dd>the border color pixel wand. </dd>

<dd> </dd>
<dt>x,y</dt>
<dd>the starting location of the operation. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickWand/deprecate_8c.html" id="MagickMedianFilterImage">MagickMedianFilterImage</a></h2>

<p>MagickMedianFilterImage() applies a digital filter that improves the quality of a noisy image.  Each pixel is replaced by the median in a set of neighboring pixels as defined by radius.</p>

<p>The format of the MagickMedianFilterImage method is:</p>

<pre class="text">
MagickBooleanType MagickMedianFilterImage(MagickWand *wand,
  const double radius)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>wand</dt>
<dd>the magick wand. </dd>

<dd> </dd>
<dt>radius</dt>
<dd>the radius of the pixel neighborhood. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickWand/deprecate_8c.html" id="MagickMinimumImages">MagickMinimumImages</a></h2>

<p>MagickMinimumImages() returns the minimum intensity of an image sequence.</p>

<p>The format of the MagickMinimumImages method is:</p>

<pre class="text">
MagickWand *MagickMinimumImages(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>wand</dt>
<dd>the magick wand. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickWand/deprecate_8c.html" id="MagickModeImage">MagickModeImage</a></h2>

<p>MagickModeImage() makes each pixel the 'predominant color' of the neighborhood of the specified radius.</p>

<p>The format of the MagickModeImage method is:</p>

<pre class="text">
MagickBooleanType MagickModeImage(MagickWand *wand,
  const double radius)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>wand</dt>
<dd>the magick wand. </dd>

<dd> </dd>
<dt>radius</dt>
<dd>the radius of the pixel neighborhood. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickWand/deprecate_8c.html" id="MagickMosaicImages">MagickMosaicImages</a></h2>

<p>MagickMosaicImages() inlays an image sequence to form a single coherent picture.  It returns a wand with each image in the sequence composited at the location defined by the page offset of the image.</p>

<p>The format of the MagickMosaicImages method is:</p>

<pre class="text">
MagickWand *MagickMosaicImages(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>wand</dt>
<dd>the magick wand. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickWand/deprecate_8c.html" id="MagickOpaqueImage">MagickOpaqueImage</a></h2>

<p>MagickOpaqueImage() changes any pixel that matches color with the color defined by fill.</p>

<p>The format of the MagickOpaqueImage method is:</p>

<pre class="text">
MagickBooleanType MagickOpaqueImage(MagickWand *wand,
  const PixelWand *target,const PixelWand *fill,const double fuzz)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>wand</dt>
<dd>the magick wand. </dd>

<dd> </dd>
<dt>channel</dt>
<dd>the channel(s). </dd>

<dd> </dd>
<dt>target</dt>
<dd>Change this target color to the fill color within the image. </dd>

<dd> </dd>
<dt>fill</dt>
<dd>the fill pixel wand. </dd>

<dd> </dd>
<dt>fuzz</dt>
<dd>By default target must match a particular pixel color exactly.  However, in many cases two colors may differ by a small amount. The fuzz member of image defines how much tolerance is acceptable to consider two colors as the same.  For example, set fuzz to 10 and the color red at intensities of 100 and 102 respectively are now interpreted as the same color for the purposes of the floodfill. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickWand/deprecate_8c.html" id="MagickPaintFloodfillImage">MagickPaintFloodfillImage</a></h2>

<p>MagickPaintFloodfillImage() changes the color value of any pixel that matches target and is an immediate neighbor.  If the method FillToBorderMethod is specified, the color value is changed for any neighbor pixel that does not match the bordercolor member of image.</p>

<p>The format of the MagickPaintFloodfillImage method is:</p>

<pre class="text">
MagickBooleanType MagickPaintFloodfillImage(MagickWand *wand,
  const ChannelType channel,const PixelWand *fill,const double fuzz,
  const PixelWand *bordercolor,const ssize_t x,const ssize_t y)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>wand</dt>
<dd>the magick wand. </dd>

<dd> </dd>
<dt>channel</dt>
<dd>the channel(s). </dd>

<dd> </dd>
<dt>fill</dt>
<dd>the floodfill color pixel wand. </dd>

<dd> </dd>
<dt>fuzz</dt>
<dd>By default target must match a particular pixel color exactly.  However, in many cases two colors may differ by a small amount. The fuzz member of image defines how much tolerance is acceptable to consider two colors as the same.  For example, set fuzz to 10 and the color red at intensities of 100 and 102 respectively are now interpreted as the same color for the purposes of the floodfill. </dd>

<dd> </dd>
<dt>bordercolor</dt>
<dd>the border color pixel wand. </dd>

<dd> </dd>
<dt>x,y</dt>
<dd>the starting location of the operation. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickWand/deprecate_8c.html" id="MagickPaintOpaqueImage">MagickPaintOpaqueImage</a></h2>

<p>MagickPaintOpaqueImage() changes any pixel that matches color with the color defined by fill.</p>

<p>The format of the MagickPaintOpaqueImage method is:</p>

<pre class="text">
MagickBooleanType MagickPaintOpaqueImage(MagickWand *wand,
  const PixelWand *target,const PixelWand *fill,const double fuzz)
MagickBooleanType MagickPaintOpaqueImageChannel(MagickWand *wand,
  const ChannelType channel,const PixelWand *target,
  const PixelWand *fill,const double fuzz)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>wand</dt>
<dd>the magick wand. </dd>

<dd> </dd>
<dt>channel</dt>
<dd>the channel(s). </dd>

<dd> </dd>
<dt>target</dt>
<dd>Change this target color to the fill color within the image. </dd>

<dd> </dd>
<dt>fill</dt>
<dd>the fill pixel wand. </dd>

<dd> </dd>
<dt>fuzz</dt>
<dd>By default target must match a particular pixel color exactly.  However, in many cases two colors may differ by a small amount. The fuzz member of image defines how much tolerance is acceptable to consider two colors as the same.  For example, set fuzz to 10 and the color red at intensities of 100 and 102 respectively are now interpreted as the same color for the purposes of the floodfill. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickWand/deprecate_8c.html" id="MagickPaintTransparentImage">MagickPaintTransparentImage</a></h2>

<p>MagickPaintTransparentImage() changes any pixel that matches color with the color defined by fill.</p>

<p>The format of the MagickPaintTransparentImage method is:</p>

<pre class="text">
MagickBooleanType MagickPaintTransparentImage(MagickWand *wand,
  const PixelWand *target,const double alpha,const double fuzz)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>wand</dt>
<dd>the magick wand. </dd>

<dd> </dd>
<dt>target</dt>
<dd>Change this target color to specified opacity value within the image. </dd>

<dd> </dd>
<dt>alpha</dt>
<dd>the level of transparency: 1.0 is fully opaque and 0.0 is fully transparent. </dd>

<dd> </dd>
<dt>fuzz</dt>
<dd>By default target must match a particular pixel color exactly.  However, in many cases two colors may differ by a small amount. The fuzz member of image defines how much tolerance is acceptable to consider two colors as the same.  For example, set fuzz to 10 and the color red at intensities of 100 and 102 respectively are now interpreted as the same color for the purposes of the floodfill. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickWand/deprecate_8c.html" id="MagickRadialBlurImage">MagickRadialBlurImage</a></h2>

<p>MagickRadialBlurImage() radial blurs an image.</p>

<p>The format of the MagickRadialBlurImage method is:</p>

<pre class="text">
MagickBooleanType MagickRadialBlurImage(MagickWand *wand,
  const double angle)
MagickBooleanType MagickRadialBlurImageChannel(MagickWand *wand,
  const ChannelType channel,const double angle)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>wand</dt>
<dd>the magick wand. </dd>

<dd> </dd>
<dt>channel</dt>
<dd>the image channel(s). </dd>

<dd> </dd>
<dt>angle</dt>
<dd>the angle of the blur in degrees. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickWand/deprecate_8c.html" id="MagickRecolorImage">MagickRecolorImage</a></h2>

<p>MagickRecolorImage() apply color transformation to an image. The method permits saturation changes, hue rotation, luminance to alpha, and various other effects.  Although variable-sized transformation matrices can be used, typically one uses a 5x5 matrix for an RGBA image and a 6x6 for CMYKA (or RGBA with offsets).  The matrix is similar to those used by Adobe Flash except offsets are in column 6 rather than 5 (in support of CMYKA images) and offsets are normalized (divide Flash offset by 255).</p>

<p>The format of the MagickRecolorImage method is:</p>

<pre class="text">
MagickBooleanType MagickRecolorImage(MagickWand *wand,
  const size_t order,const double *color_matrix)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>wand</dt>
<dd>the magick wand. </dd>

<dd> </dd>
<dt>order</dt>
<dd>the number of columns and rows in the color matrix. </dd>

<dd> </dd>
<dt>color_matrix</dt>
<dd>An array of doubles representing the color matrix. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickWand/deprecate_8c.html" id="MagickReduceNoiseImage">MagickReduceNoiseImage</a></h2>

<p>MagickReduceNoiseImage() smooths the contours of an image while still preserving edge information.  The algorithm works by replacing each pixel with its neighbor closest in value.  A neighbor is defined by radius.  Use a radius of 0 and ReduceNoise() selects a suitable radius for you.</p>

<p>The format of the MagickReduceNoiseImage method is:</p>

<pre class="text">
MagickBooleanType MagickReduceNoiseImage(MagickWand *wand,
  const double radius)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>wand</dt>
<dd>the magick wand. </dd>

<dd> </dd>
<dt>radius</dt>
<dd>the radius of the pixel neighborhood. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickWand/deprecate_8c.html" id="MagickMaximumImages">MagickMaximumImages</a></h2>

<p>MagickMaximumImages() returns the maximum intensity of an image sequence.</p>

<p>The format of the MagickMaximumImages method is:</p>

<pre class="text">
MagickWand *MagickMaximumImages(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>wand</dt>
<dd>the magick wand. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickWand/deprecate_8c.html" id="MagickSetImageAttribute">MagickSetImageAttribute</a></h2>

<p>MagickSetImageAttribute() associates a property with an image.</p>

<p>The format of the MagickSetImageAttribute method is:</p>

<pre class="text">
MagickBooleanType MagickSetImageAttribute(MagickWand *wand,
  const char *property,const char *value)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>wand</dt>
<dd>the magick wand. </dd>

<dd> </dd>
<dt>property</dt>
<dd>the property. </dd>

<dd> </dd>
<dt>value</dt>
<dd>the value. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickWand/deprecate_8c.html" id="MagickSetImageIndex">MagickSetImageIndex</a></h2>

<p>MagickSetImageIndex() set the current image to the position of the list specified with the index parameter.</p>

<p>The format of the MagickSetImageIndex method is:</p>

<pre class="text">
MagickBooleanType MagickSetImageIndex(MagickWand *wand,
  const ssize_t index)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>wand</dt>
<dd>the magick wand. </dd>

<dd> </dd>
<dt>index</dt>
<dd>the scene number. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickWand/deprecate_8c.html" id="MagickTransparentImage">MagickTransparentImage</a></h2>

<p>MagickTransparentImage() changes any pixel that matches color with the color defined by fill.</p>

<p>The format of the MagickTransparentImage method is:</p>

<pre class="text">
MagickBooleanType MagickTransparentImage(MagickWand *wand,
  const PixelWand *target,const double alpha,const double fuzz)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>wand</dt>
<dd>the magick wand. </dd>

<dd> </dd>
<dt>target</dt>
<dd>Change this target color to specified opacity value within the image. </dd>

<dd> </dd>
<dt>alpha</dt>
<dd>the level of transparency: 1.0 is fully opaque and 0.0 is fully transparent. </dd>

<dd> </dd>
<dt>fuzz</dt>
<dd>By default target must match a particular pixel color exactly.  However, in many cases two colors may differ by a small amount. The fuzz member of image defines how much tolerance is acceptable to consider two colors as the same.  For example, set fuzz to 10 and the color red at intensities of 100 and 102 respectively are now interpreted as the same color for the purposes of the floodfill. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickWand/deprecate_8c.html" id="MagickRegionOfInterestImage">MagickRegionOfInterestImage</a></h2>

<p>MagickRegionOfInterestImage() extracts a region of the image and returns it as a new wand.</p>

<p>The format of the MagickRegionOfInterestImage method is:</p>

<pre class="text">
MagickWand *MagickRegionOfInterestImage(MagickWand *wand,
  const size_t width,const size_t height,const ssize_t x,
  const ssize_t y)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>wand</dt>
<dd>the magick wand. </dd>

<dd> </dd>
<dt>width</dt>
<dd>the region width. </dd>

<dd> </dd>
<dt>height</dt>
<dd>the region height. </dd>

<dd> </dd>
<dt>x</dt>
<dd>the region x offset. </dd>

<dd> </dd>
<dt>y</dt>
<dd>the region y offset. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickWand/deprecate_8c.html" id="MagickSetImagePixels">MagickSetImagePixels</a></h2>

<p>MagickSetImagePixels() accepts pixel datand stores it in the image at the location you specify.  The method returns MagickFalse on success otherwise MagickTrue if an error is encountered.  The pixel data can be either char, short int, int, ssize_t, float, or double in the order specified by map.</p>

<p>Suppose your want to upload the first scanline of a 640x480 image from character data in red-green-blue order:</p>

<pre class="text">
MagickSetImagePixels(wand,0,0,640,1,"RGB",CharPixel,pixels);
</pre>

<p>The format of the MagickSetImagePixels method is:</p>

<pre class="text">
MagickBooleanType MagickSetImagePixels(MagickWand *wand,
  const ssize_t x,const ssize_t y,const size_t columns,
  const size_t rows,const char *map,const StorageType storage,
  const void *pixels)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>wand</dt>
<dd>the magick wand. </dd>

<dd> </dd>
<dt>x, y, columns, rows</dt>
<dd> These values define the perimeter of a region of pixels you want to define. </dd>

<dd> </dd>
<dt>map</dt>
<dd> This string reflects the expected ordering of the pixel array. It can be any combination or order of R = red, G = green, B = blue, A = alpha (0 is transparent), O = opacity (0 is opaque), C = cyan, Y = yellow, M = magenta, K = black, I = intensity (for grayscale), P = pad. </dd>

<dd> </dd>
<dt>storage</dt>
<dd>Define the data type of the pixels.  Float and double types are expected to be normalized [0..1] otherwise [0..QuantumRange].  Choose from these types: CharPixel, ShortPixel, IntegerPixel, LongPixel, FloatPixel, or DoublePixel. </dd>

<dd> </dd>
<dt>pixels</dt>
<dd>This array of values contain the pixel components as defined by map and type.  You must preallocate this array where the expected length varies depending on the values of width, height, map, and type. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickWand/deprecate_8c.html" id="MagickWriteImageBlob">MagickWriteImageBlob</a></h2>

<p>MagickWriteImageBlob() implements direct to memory image formats.  It returns the image as a blob and its length.   Use MagickSetFormat() to set the format of the returned blob (GIF, JPEG,  PNG, etc.).</p>

<p>Use MagickRelinquishMemory() to free the blob when you are done with it.</p>

<p>The format of the MagickWriteImageBlob method is:</p>

<pre class="text">
unsigned char *MagickWriteImageBlob(MagickWand *wand,size_t *length)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>wand</dt>
<dd>the magick wand. </dd>

<dd> </dd>
<dt>length</dt>
<dd>the length of the blob. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickWand/deprecate_8c.html" id="NewPixelView">NewPixelView</a></h2>

<p>NewPixelView() returns a pixel view required for all other methods in the Pixel View API.</p>

<p>The format of the NewPixelView method is:</p>

<pre class="text">
PixelView *NewPixelView(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>wand</dt>
<dd>the wand. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickWand/deprecate_8c.html" id="NewPixelViewRegion">NewPixelViewRegion</a></h2>

<p>NewPixelViewRegion() returns a pixel view required for all other methods in the Pixel View API.</p>

<p>The format of the NewPixelViewRegion method is:</p>

<pre class="text">
PixelView *NewPixelViewRegion(MagickWand *wand,const ssize_t x,
  const ssize_t y,const size_t width,const size_t height)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>wand</dt>
<dd>the magick wand. </dd>

<dd> </dd>
<dt>x,y,columns,rows</dt>
<dd> These values define the perimeter of a region of pixel_wands view. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickWand/deprecate_8c.html" id="PixelGetNextRow">PixelGetNextRow</a></h2>

<p>PixelGetNextRow() returns the next row as an array of pixel wands from the pixel iterator.</p>

<p>The format of the PixelGetNextRow method is:</p>

<pre class="text">
PixelWand **PixelGetNextRow(PixelIterator *iterator,
  size_t *number_wands)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>iterator</dt>
<dd>the pixel iterator. </dd>

<dd> </dd>
<dt>number_wands</dt>
<dd>the number of pixel wands. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickWand/deprecate_8c.html" id="PixelIteratorGetException">PixelIteratorGetException</a></h2>

<p>PixelIteratorGetException() returns the severity, reason, and description of any error that occurs when using other methods in this API.</p>

<p>The format of the PixelIteratorGetException method is:</p>

<pre class="text">
char *PixelIteratorGetException(const Pixeliterator *iterator,
  ExceptionType *severity)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>iterator</dt>
<dd>the pixel iterator. </dd>

<dd> </dd>
<dt>severity</dt>
<dd>the severity of the error is returned here. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickWand/deprecate_8c.html" id="SetPixelViewIterator">SetPixelViewIterator</a></h2>

<p>SetPixelViewIterator() iterates over the pixel view in parallel and calls your set method for each scanline of the view.  The pixel region is confined to the image canvas-- that is no negative offsets or widths or heights that exceed the image dimension.  The pixels are initiallly undefined and any settings you make in the callback method are automagically synced back to your image.</p>

<p>Use this pragma:</p>

<pre class="text">
    #pragma omp critical
</pre>

<p>to define a section of code in your callback set method that must be executed by a single thread at a time.</p>

<p>The format of the SetPixelViewIterator method is:</p>

<pre class="text">
MagickBooleanType SetPixelViewIterator(PixelView *destination,
  SetPixelViewMethod set,void *context)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>destination</dt>
<dd>the pixel view. </dd>

<dd> </dd>
<dt>set</dt>
<dd>the set callback method. </dd>

<dd> </dd>
<dt>context</dt>
<dd>the user defined context. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickWand/deprecate_8c.html" id="TransferPixelViewIterator">TransferPixelViewIterator</a></h2>

<p>TransferPixelViewIterator() iterates over two pixel views in parallel and calls your transfer method for each scanline of the view.  The source pixel region is not confined to the image canvas-- that is you can include negative offsets or widths or heights that exceed the image dimension. However, the destination pixel view is confined to the image canvas-- that is no negative offsets or widths or heights that exceed the image dimension are permitted.</p>

<p>Use this pragma:</p>

<pre class="text">
    #pragma omp critical
</pre>

<p>to define a section of code in your callback transfer method that must be executed by a single thread at a time.</p>

<p>The format of the TransferPixelViewIterator method is:</p>

<pre class="text">
MagickBooleanType TransferPixelViewIterator(PixelView *source,
  PixelView *destination,TransferPixelViewMethod transfer,void *context)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>source</dt>
<dd>the source pixel view. </dd>

<dd> </dd>
<dt>destination</dt>
<dd>the destination pixel view. </dd>

<dd> </dd>
<dt>transfer</dt>
<dd>the transfer callback method. </dd>

<dd> </dd>
<dt>context</dt>
<dd>the user defined context. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickWand/deprecate_8c.html" id="UpdatePixelViewIterator">UpdatePixelViewIterator</a></h2>

<p>UpdatePixelViewIterator() iterates over the pixel view in parallel and calls your update method for each scanline of the view.  The pixel region is confined to the image canvas-- that is no negative offsets or widths or heights that exceed the image dimension are permitted.  Updates to pixels in your callback are automagically synced back to the image.</p>

<p>Use this pragma:</p>

<pre class="text">
    #pragma omp critical
</pre>

<p>to define a section of code in your callback update method that must be executed by a single thread at a time.</p>

<p>The format of the UpdatePixelViewIterator method is:</p>

<pre class="text">
MagickBooleanType UpdatePixelViewIterator(PixelView *source,
  UpdatePixelViewMethod update,void *context)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>source</dt>
<dd>the source pixel view. </dd>

<dd> </dd>
<dt>update</dt>
<dd>the update callback method. </dd>

<dd> </dd>
<dt>context</dt>
<dd>the user defined context. </dd>

<dd>  </dd>
</dl>
</div>
    </div>
  </main><!-- /.container -->
  <footer class="magick-footer">
    <p><a href="../script/security-policy.php">Security</a> •
    <a href="../script/architecture.php">Architecture</a> •
    <a href="../script/links.php">Related</a> •
     <a href="../script/sitemap.php">Sitemap</a>
    &nbsp; &nbsp;
    <a href="deprecate.php#"><img class="d-inline" id="wand" alt="And Now a Touch of Magick" width="16" height="16" src="../image/wand.ico"/></a>
    &nbsp; &nbsp;
    <a href="http://pgp.mit.edu/pks/lookup?op=get&amp;search=0x89AB63D48277377A">Public Key</a> •
    <a href="../script/support.php">Donate</a> •
    <a href="../script/contact.php">Contact Us</a>
    <br/>
        <small>© 1999-2019 ImageMagick Studio LLC</small></p>
  </footer>

  <!-- Javascript assets -->
  <script src="../assets/magick-js.php" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="../assets/jquery.min.js"><\/script>')</script>
</body>
</html>
