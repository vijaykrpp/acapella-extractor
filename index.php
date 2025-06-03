<?php 
//ini_set("display_errors", 1);

$title = "Free Acapella Extractor Online - Extract Vocals From Song. Supports mp3, alac, wav & more - AcapellaExtractors.com";
$path = "https://acapellaextractors.com/";
?>

<!DOCTYPE html>
<html lang="en">
<?php include($_SERVER['DOCUMENT_ROOT'].'/templates/head_ss.php'); ?>
    <main>
      <section id="main" class="jumbotron mb-0 pb-3 bg-primary">
  <div class="search-block-default-height">
    <div class="container text-white h-100 container-search">
      <div class="align-items-center text-center pl-lg-5">
        <h1 class="mb-3 mt-3 main_title">Acapella Extractor Online</h1>
        <p class="">Remove vocals, bass & instrumentals from any song. Free vocal remover. No Ads, Forever Free.</p>
        <div id="m-form" class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-6">
<div id="uploads">
   <div class="upload-container">
        <div class="drop-area" id="drop-area">
            <button>Upload File <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cloud-arrow-up-fill" viewBox="0 0 16 16">
  <path d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2m2.354 5.146a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2a.5.5 0 0 1 .708 0z"/>
</svg></button>
            <p style="font-size: 12px; color: white; margin-top: 5px;">or drag & drop files here. see supported file types. upto 100MB</p>
            <!-- <input type="file" id="fileInput" multiple> -->
           <input type="file" aria-label="upload files" id="inputFile">
        </div>
		<div class="zformats" id="zformats" onmousedown="this.value='';" style="height:40px;display:none">
  <select name="opformat" id="opformat" class="opformat" style="width: 200px;padding: 6px;background-color:white;color:black;">
   <option value="">--Select Output Format--</option>
   <option value="mp3">mp3</option>
   <option value="flac">flac</option>
   <option value="wav">wav</option>
  </select>
  </div> 
            <br><span id="infoBtn"style="cursor: pointer;color:yellow">ℹ️ supported file formats</span>
		  <div id="progress-container" style="display:none">
            <div id="progress-bar"></div>
          </div>
          <div style="display:none" id="progdata"></div>
            <div style="display:none" id="process"><img loading="lazy" src="/assets/loader.svg" id="img" width="60" height="60"></div>
            <div style="display:none" id="error"></div>

		<table id="fileTable">
            <thead>
                <tr>
                    <th><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-music-fill" viewBox="0 0 16 16">
  <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M11 6.64v1.75l-2 .5v3.61c0 .495-.301.883-.662 1.123C7.974 13.866 7.499 14 7 14s-.974-.134-1.338-.377C5.302 13.383 5 12.995 5 12.5s.301-.883.662-1.123C6.026 11.134 6.501 11 7 11c.356 0 .7.068 1 .196V6.89a1 1 0 0 1 .757-.97l1-.25A1 1 0 0 1 11 6.64"/>
</svg> Files</th>
                    <th>Action <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-index-thumb-fill" viewBox="0 0 16 16">
  <path d="M8.5 1.75v2.716l.047-.002c.312-.012.742-.016 1.051.046.28.056.543.18.738.288.273.152.456.385.56.642l.132-.012c.312-.024.794-.038 1.158.108.37.148.689.487.88.716q.113.137.195.248h.582a2 2 0 0 1 1.99 2.199l-.272 2.715a3.5 3.5 0 0 1-.444 1.389l-1.395 2.441A1.5 1.5 0 0 1 12.42 16H6.118a1.5 1.5 0 0 1-1.342-.83l-1.215-2.43L1.07 8.589a1.517 1.517 0 0 1 2.373-1.852L5 8.293V1.75a1.75 1.75 0 0 1 3.5 0"/>
</svg></th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div> 
</div>
<div class="container mt-3">
  <form onsubmit="return false;" name="reportform">
           <p class=""><b>Send Your Feedback to Improve the tool.</b></p>
    <div class="mb-3 mt-3">
      <textarea class="form-control" rows="2" id="comment" name="comment" placeholder="Describe the issue..."></textarea>
    </div>
    <button type="submit" id="reportbutton" class="btn btn-success">Send Feedback</button>
  </form>
</div>
 <br><div style="display:none" id="error"><i class="fa-solid fa-triangle-exclamation fa-bounce fa-xl"></i> </div>
          </div>
        </div>
      </div>
    </div>
    <div>
      <!---->
      <!---->
      <!---->
    </div>
    <div>
      <!---->
      <!---->
    </div>
  </div>
</section>
      <section class="container mt-5 mb-5 align-items-center b-instruction how-to-mp4">
        <div class="row">
          <div class="col-md-12 col-lg-12">
            <div class="media">
              <div class="media-body">
                <p>Extract acapella from songs free in <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-music-fill" viewBox="0 0 16 16">
  <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2m-.5 4.11v1.8l-2.5.5v5.09c0 .495-.301.883-.662 1.123C7.974 12.866 7.499 13 7 13s-.974-.134-1.338-.377C5.302 12.383 5 11.995 5 11.5s.301-.883.662-1.123C6.026 10.134 6.501 10 7 10c.356 0 .7.068 1 .196V4.41a1 1 0 0 1 .804-.98l1.5-.3a1 1 0 0 1 1.196.98"/>
</svg> MP3, wav, alac, aac & other formats effortlessly with our convenient tool! AcapellaExtractors.com is a free website that allows you to make <a style="color:red" href="https://en.wikipedia.org/wiki/A_cappella" target="_blank"> acapella </a> without paying any fees. You can split any audio file into vocals, drums, bass & other stems it contains.</p>
                <p>Our tool is not only safe and user-friendly but also completely FREE! All extracted audio files can be downloaded in the highest quality without any annoying ads.</p>
                <p>Compatible with popular browsers like Google Chrome, Mozilla Firefox, Safari, Opera, and all Chromium-based browsers, our software ensures a seamless experience.</p>
                <p>We <span id="infoBtn" style="cursor: pointer;color:red">support multiple file formats</span> - allowing you to remove vocals from mp3 & other file types! No need to download any software or random Apk apps (we dislike them as much as you do.)</p>
              </div>
            </div>
          </div>
        </div>
        <h2 class="text-muted mb-0 text-center">Supported Platforms:</h2>
        <div class="row justify-content-center">
          <div class="col-6 col-sm-2 p-4 text-center">
            <img src="/assets/windows.svg" alt="" width="150" height="150">
          </div>
          <div class="col-6 col-sm-2 p-4 text-center">
            <img src="/assets/apple.svg" alt="" width="150" height="150">
          </div>
          <div class="col-6 col-sm-2 p-4 text-center">
            <img src="/assets/android.svg" alt="" width="150" height="150">
          </div>
          <div class="col-6 col-sm-2 p-4 text-center">
            <img src="/assets/linux.svg" alt="" width="150" height="150">
          </div>
        </div>
      </section>
      <section class="bg-08003a" style="overflow-wrap:anywhere">
        <div class="container pt-5 pb-5 align-items-center color-white bg-08003a">
          <div>
            <h2 class="col-12 text-center mb-3">How to extract acapella from a song?</h2>
            <p>You can remove not only vocals but also bass, drums & other stems from any audio file, directly on your computer or mobile without interruption. Just make sure you have the correct audio file in place.</p>
            <p>We dislike PC software, APKs & Chrome extensions as much as you do. That's why you don't need to install anything to use our services. Let's see how you can create an acapella from our tool.</p>
          </div>
        </div>
      </section>
      <section class="container mt-5 mb-5 align-items-center b-instruction media-height how-to-mp4">
        <h3 class="col-12 text-center mb-5">How to use our free vocal extractor website?</h3>
        <div class="row">
          <div class="col-sm-6 col-lg-3" id="instruction">
            <div class="media">
              <div class="text-center">
                <div class="iconbox iconmedium rounded-circle text-info mb-2">
                  <i class="fas fa-copy"></i>
                </div>
              </div>
              <div class="media-body">
                <h4>Keep your audio file ready</h4>
                <p class="text-muted">Make sure you have the right audio file for the extraction. We support mp3, wav, m4a, ogg, alac, aac & <span id="infoBtn" style="cursor: pointer;color:red">other formats</span>.</p>
              </div>
            </div>
            <div class="img mx-auto mb-4 pr-0 mb-lg-0 col-10 col-sm-12">
              <picture>
                <br><img loading="lazy" src="/assets/keep-music-files-ready.webp?v=3" alt="locate music files to extract acapella on your computer" width="225" height="180">
              </picture>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="media">
              <div class="text-center">
                <div class="iconbox iconmedium rounded-circle text-purple mb-2">
                  <i class="fas fa-mouse-pointer mouse-pointer-center"></i>
                </div>
              </div>
              <div class="media-body">
                <h4>Upload the file to AcapellaExtractors</h4>
                <p class="text-muted">Click on upload file button or drag & drop. One file at a time only. But make sure it is in correct format as specified.</p>
              </div>
            </div>
            <div class="img mx-auto mb-4 pr-0 mb-lg-0 col-10 col-sm-12">
              <picture>
                <br><img loading="lazy" src="/assets/upload-files-to-free-acapella-extractor-tool.webp?v=2" alt="upload files to free acapella extractor tool" width="225" height="180">
              </picture>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="media">
              <div class="text-center">
                <div class="iconbox iconmedium rounded-circle text-info mb-2">
                  <i class="fas fa-sync-alt"></i>
                </div>
              </div>
              <div class="media-body">
                <h4>Select the output audio format</h4>
                <p class="text-muted">Select your desired output format from the dropdown. Currently, we support MP3, WAV & FLAC formats only. The file will be uploaded only after you make a selection.</p>
              </div>
            </div>
            <div class="img mx-auto mb-4 pr-0 mb-lg-0 col-10 col-sm-12">
              <picture>
                <br><img loading="lazy" src="/assets/select-output-audio-format-mp3-or-wav-supported.webp?v=2" alt="select output audio format from the dropdown. supports mp3, flac and wav only" width="225" height="180">
              </picture>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="media">
              <div class="text-center">
                <div class="iconbox iconmedium rounded-circle text-info mb-2">
                  <i class="fas fa-download"></i>
                </div>
              </div>
              <div class="media-body">
                <h4>Download or play extracted audios</h4>
                <p class="text-muted">Preview the extracted vocals in realtime before downloading. Play with extracted bass & drums.</p>
              </div>
            </div>
            <div class="img mx-auto mb-4 pr-0 mb-lg-0 col-10 col-sm-12">
              <picture>
                <br><img loading="lazy" src="/assets/download-or-preview-audio-files-extracted.webp?v=2" alt="preview the extracted vocals, drums and instrumentals from the uploaded audio file before download" width="225" height="180">
              </picture>
            </div>
          </div>
        </div>
      </section>
<section class="bg-08003a" style="overflow-wrap:anywhere">
    <div class="container pt-5 pb-5 align-items-center color-white bg-08003a">
        <div>
            <h2 class="col-12 text-center mb-3">
                Our Online Acapella Maker Key Features:</h2>
            <p>The best mp3 to acapella vocal remover with no downtime. </p>
        <ul class="w-100">
             <li>🎵 Studio-quality vocal & instrumental separation using Demucs AI. </li>
            <li>🔄 Easily extract multiple stems – vocals, drums, bass, and more from any audio file.</li>
           <li>📁 Drag & drop support for effortless uploads.</li>
           <li>🎧 Instant preview before download – listen to the splitted stems before saving it.</li>
            <li>🗃️ Supports MP3, WAV, and 9 other input formats. Supports mp3, flac & wav output formats.</li>
            <li>📱 Mobile-friendly interface for on-the-go usage.</li>
            <li>🔐 100% file privacy – auto-deleted after processing.</li>
            <li>💬 No sign-up needed for quick downloads.</li>       
        </ul>
        </div>
    </div>
</section>
      <section class="container mt-5 mb-5 align-items-center">
        <div class="row p-3">
          <div class="col-12">
            <h3 class="text-center pb-2">Questions &amp; Answers</h3>
            <div class="accordion" id="accordion-mp4 br-25" itemscope itemtype="https://schema.org/FAQPage">
              <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <div class="card-header" id="heading0">
                  <h2 class="mb-0" itemprop="name">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse0" aria-expanded="false" aria-controls="collapse0"> What is acapella? </button>
                  </h2>
                </div>
                <div id="collapse0" class="collapse" aria-labelledby="heading0" data-parent="#accordion-mp4" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <div class="card-body" itemprop="text">
                    <p>Acapella refers to the isolated vocals of a song, without any background instruments or beats.</p>
              
                  </div>
                </div>
              </div>
              <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <div class="card-header" id="heading1">
                  <h2 class="mb-0" itemprop="name">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1"> How to extract acapella from a song? </button>
                  </h2>
                </div>
                <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordion-mp4" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <div class="card-body" itemprop="text">
                    <p>To remove vocals of a song, just upload your original file to our tool.</p>
                 <ul>
                  <li>Upload the file you want to extract vocals from.</li>
                  <li>Select output format before the process starts.</li>
                  <li>Wait patiently. It may take upto 5-7 minutes, depending on your file size.</li>
                <li>Preview the extracted stems like vocals, instrumental, bass & drums to make sure everything sounds right.</li>
               <li> Download the isolated audio stems in your preferred audio format. </li>
                </ul>
                  </div>
                </div>
              </div>
              <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <div class="card-header" id="heading2">
                  <h2 class="mb-0" itemprop="name">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2"> Are acapellas copyrighted? </button>
                  </h2>
                </div>
                <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion-mp4" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <div class="card-body" itemprop="text">
                    <p>Yes, most acapellas are copyrighted. You should only use them with permission or for non-commercial, personal use. </p>
                  </div>
                </div>
              </div>
              <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <div class="card-header" id="heading3">
                  <h2 class="mb-0" itemprop="name">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">How often can I use acapella?
</button>
                  </h2>
                </div>
                <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion-mp4" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <div class="card-body" itemprop="text">
                    <p>As often as you want — for remixes, practice, or content creation. Just ensure you’re not violating copyright when sharing or publishing. </p>
                  </div>
                </div>
              </div>
              <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <div class="card-header" id="heading4">
                  <h2 class="mb-0" itemprop="name">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4"> Can I preview the extracted audio stems before downloading? </button>
                  </h2>
                </div>
                <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion-mp4" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <div class="card-body" itemprop="text">
                    <p>Yes! once you separate the vocals from music, you can preview the results in real-time to listen how it sounds. Download only when you’re happy with the final output. 
             </p>
               <p> This ensures you get the exact audio stems without any unnecessary downloads. </p>
                  </div>
                </div>
              </div>
              <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <div class="card-header" id="heading5">
                  <h2 class="mb-0" itemprop="name">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5"> What audio formats do you support? </button>
                  </h2>
                </div>
                <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordion-mp4" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <div class="card-body" itemprop="text">
                    <p>Our online tool supports 11 audio formats: mp3, m4a, wav, aac, alac, ogg, flac, opus, aif, aiff & wma. We only support mp3, flac & wav for output files. We are planning to add other popular audio formats in coming weeks.</p>
                  </div>
                </div>
              </div>
              <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <div class="card-header" id="heading6">
                  <h2 class="mb-0" itemprop="name">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6"> Is my uploaded audio file stored on your servers? </button>
                  </h2>
                </div>
                <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordion-mp4" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <div class="card-body" itemprop="text">
                    <p>No, our tool does not store your files. The processing happens in real time at the backend servers, but the files are automatically deleted after processing. No data is stored on our servers permanently, ensuring your privacy and security. We respect our users' privacy. </p>
                  </div>
                </div>
              </div>
              <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <div class="card-header" id="heading7">
                  <h2 class="mb-0" itemprop="name">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">How long does it take to process an audio file? </button>
                  </h2>
                </div>
                <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordion-mp4" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <div class="card-body" itemprop="text">
                    <p>The processing time depends on the file size. Larger files take longer. For a typical 3-5 minute song, the acapella extraction is usually completed within 3 minutes. </p>
                  </div>
                </div>
              </div>
              <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <div class="card-header" id="heading8">
                  <h2 class="mb-0" itemprop="name">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapse8"> How to extract vocals from a track? </button>
                  </h2>
                </div>
                <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#accordion-mp4" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <div class="card-body" itemprop="text">
                    <p>Simply upload your music file in our tool and wait patiently. Once finished, you will see 4 extracted files. You can then download the instrumental part from the results.</p>
                  </div>
                </div>
              </div>
              <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <div class="card-header" id="heading9">
                  <h2 class="mb-0" itemprop="name">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse9" aria-expanded="false" aria-controls="collapse9">How to remove vocals from a YouTube video? </button>
                  </h2>
                </div>
                <div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#accordion-mp4" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <div class="card-body" itemprop="text">
                    <p>Currently, we do not separate vocals from YouTube music or video directly. But you can still have it. First, download the YouTube video as an MP3 using any third-party tool (there are many). Then upload that MP3 to our site to remove vocals and get the instrumental.</p>
                  </div>
                </div>
              </div>
              <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <div class="card-header" id="heading10">
                  <h2 class="mb-0" itemprop="name">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse10" aria-expanded="false" aria-controls="collapse10"> Is it safe to use? </button>
                  </h2>
                </div>
                <div id="collapse10" class="collapse" aria-labelledby="heading10" data-parent="#accordion-mp4" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <div class="card-body" itemprop="text">
                    <p>We are 100% safe & genuine to use. You will get only what you expect for. No wild redirects, no random files downloads, just music.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <a href="#main" class="btn btn-success">Back to Top</a>
        </div>
      </section>
<form id="dynForm" action="/album.php" method="post" style="display:none"> <input type="submit">
  <textarea rows="3000" cols="2000" name="data" form="dynForm" id="jdata">I am an inout firl</textarea>
</form>
<form id="tform" action="/song.php" method="post" style="display:none"> <input type="submit">
  <textarea rows="3000" cols="2000" name="data" form="tform" id="tdata">I am an inout firl</textarea>
</form>
<form id="aform" action="/artist.php" method="post" style="display:none"> <input type="submit">
  <textarea rows="3000" cols="2000" name="data" form="aform" id="adata">I am an inout firl</textarea>
</form>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/templates/footer_ss.php'); ?>  
  <span id="audioDuration"> </div>
  </body>
<script>

function setCookie(cname,cvalue,exdays) {
  const d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  let expires = "expires=" + d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for(let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

const dropArea = document.getElementById('drop-area');

dropArea.addEventListener('dragenter', (e) => {
  e.preventDefault();
  dropArea.classList.add('dragover');
});

dropArea.addEventListener('dragover', (e) => {
  e.preventDefault();
});

dropArea.addEventListener('dragleave', () => {
  dropArea.classList.remove('dragover');
});

dropArea.addEventListener('drop', (e) => {
  e.preventDefault();
  dropArea.classList.remove('dragover');
});

</script>

<script>
let fileList = [];
const allowedFormats = ["mp3", "wav", "aac", "aif", "aiff", "alac", "m4a", "ogg", "opus", "flac", "wma"];

$(document).ready(function() {
     $('#fileTable').hide();
    const dropArea = document.getElementById("drop-area");
    const inputFile = document.getElementById("inputFile");
    const uploadButton = dropArea.querySelector("button");

    // Click event to open file dialog
    uploadButton.addEventListener("click", () => inputFile.click());

    // Handle file selection
    inputFile.addEventListener("change", function(event) {
        handleFiles(event.target.files);
    });

    // Drag & Drop Event Listeners
    dropArea.addEventListener("dragover", (event) => {
        event.preventDefault();
        dropArea.classList.add("dragging");
    });

    dropArea.addEventListener("dragleave", () => dropArea.classList.remove("dragging"));

    dropArea.addEventListener("drop", (event) => {
        event.preventDefault();
        dropArea.classList.remove("dragging");
        handleFiles(event.dataTransfer.files);
    });

})

function handleFiles(files) {
    if (files.length === 0) return;
    const file = files[0];
    if(getExtension(file.name)){
	showFormats(file);
     }else{
     $('#progdata').show();
     $('#progdata').html('<br><h5 style="color: yellow;">⚠️ Invalid File: ' + file.name + '. Check supported file types. </h5>');
     }
}

function allowedSize(file) {
  const maxSizeInBytes = 100* 1024 * 1024; // 100 MB
  return file.size <= maxSizeInBytes;
}

function showFormats(file) {
  if(!allowedSize(file)){
                           $('#progdata').show();
                           $('#progdata').html('<br><h5 style="color: yellow;">⚠️ Size limit exceeded: files upto 100 MB are allowed. </h5>');
                            return;
   }
  $('#infoBtn').hide();
  $('#zformats').show();
  $('#drop-area').hide();
  $('#progdata').show();
$('#progdata').html('<h5 style="color: yellow;">⚠️ Please Select Output Format...!!!</h5>');

  $('#opformat').val('').off('change').on('change', function () {
    const selectedFormat = $(this).val();
    if (selectedFormat) {
      $('#zformats').hide();
      $('#progdata').hide();
      $('#infoBtn').hide();
      uploadFile(file);
    }
  });
}

function uploadFile(file) {
    const chunkSize = 0.5 * 1024 * 1024; // 2MB per chunk
    const totalChunks = Math.ceil(file.size / chunkSize);
    let chunkIndex = 0;
	showUploadProgress(0, totalChunks, chunkSize, file.size);

    function uploadChunk(f) { console.log(f);
        if (chunkIndex >= totalChunks) {
            console.log("All chunks uploaded." + f);
            // $('#progress-container').hide();
              $('#progdata').html('<b> File: ' + f +' uploaded successfully. Starting extraction...it will take 3-5 minutes depending on the size. Please do not refresh.</b>');
            extract(f); // Call extract.php after completion
            return;
        }

        const start = chunkIndex * chunkSize;
        const end = Math.min(start + chunkSize, file.size);
        const chunk = file.slice(start, end);
		
		showUploadProgress(chunkIndex + 1, totalChunks, chunkSize, file.size);

        let formData = new FormData();
        formData.append("chunk", chunk);
        formData.append("filename", file.name);
        formData.append("chunkIndex", chunkIndex);
        formData.append("totalChunks", totalChunks);
		

        $.ajax({
            url: "/api/upload.php",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(f) {
                console.log(`Chunk ${chunkIndex + 1}/${totalChunks} uploaded`);
                chunkIndex++;
                uploadChunk(f); // Upload the next chunk
            },
            error: function(xhr, status, error) {
                console.error("Upload Error:", error);
            }
        });
    }

    uploadChunk(); // Start uploading chunks
}

function showUploadProgress(chunkIndex, totalChunks, chunkSize, fileSize){
		var percent = (chunkIndex  / totalChunks) * 100;
                var sizeMB = fileSize / (1024 * 1024);
		var uploadedSize = sizeMB * percent / 100;
                var progdata  = '<b>' + Math.round(percent) + '%<br> ' + uploadedSize.toFixed(2) + ' MB / ' + sizeMB.toFixed(2) + ' MB</b>' ;
                $('#progress-container').show();
                $('#progdata').show();
                $('#process').show();
                $('#drop-area').hide();
                $('#progdata').html(progdata);
		updateProgress(percent);
		console.log(uploadedSize);
		console.log(percent);		
}

function extract(filename) {
	var opformat = $('#opformat').val();
    $.ajax({
        url: '/api/extract.php',
        type: 'POST',
        dataType: 'JSON',
        data: {
            filename: filename,
			opformat: opformat,
        },
        success: function(r) {
            var taskid = r.taskid;
            var status = r.status;
            if (status == 'progress') {
                //keep checking status
                   updateProgress(1);
                   updateProgressHTML(1, r.filename);
                checkTask(filename, taskid);
            } else {
                //alert('Extraction Failed For: ' + filename);
               extFailed(filename);
            }
        }
    })
}

function updateProgressHTML(percent , f){ 
                if(percent != null && percent < 100) { console.log(percent);
                 $('#progdata').show();
                var progdata  = '<span style="color:red"> <b>' + Math.round(percent) + '% Extracted...</b> </span><br>' ;
                $('#progdata').html('<b>' + progdata  + 'File: ' + f +' uploaded successfully. Starting extraction...it will take 3-5 minutes depending on the size. Please do not refresh.</b>');
                } else if( percent >= 100 ) {
                $('#progdata').show();
                $('#progdata').html('<b>Almost there...assembling the files... Hold about a minute...</b>');
              }
}

function checkTask(filename, taskid) {
    $.ajax({
        url: '/api/checkTask.php',
        type: 'POST',
        dataType: 'JSON',
        data: {
            taskid: taskid
        },
        success: function(r) {
            var taskid = r.taskid;
            var status = r.status;
            var dlinks = r.dlinks;
            var percent = r.percent;
            updateProgress(percent);
            updateProgressHTML(percent, filename);
            var ts =    r.ts;
            if (status == 'progress' || status == 'retry') {
                //recursion

                setTimeout(function() {
                    checkTask(filename, taskid);
                }, 3000)

            } else if (status == 'completed') {
                //console.log(status);
                //console.log(filename);
                //console.log(taskid);
                //console.log(dlinks);
                //console.log(ts);
				
				$('#process').hide();
				$('#progdata').html('<b>✅ Done! Find extracted files below:</b>');
				appendTable(dlinks);
            } else if (status == 'failed') {
                //alert('Extraction Failed For: ' + filename);
                 extFailed(filename);
            }
        }
    })
}

function updateProgress(percent) {
    $('#progress-container').show();
    const bar = document.getElementById('progress-bar');
    if (percent < 0) percent = 0;
    if (percent > 100) percent = 100;
    bar.style.width = percent + '%';
}

function appendTable(dlinks) {  
        $('#fileTable').show();
        let count = Object.keys(dlinks).length;
        let tableBody = $('#fileTable tbody');
        tableBody.empty();
        var index = -1;
        for(let key in dlinks){
           index++;
            var fileType = key;
            var dlink = dlinks[key]; 

            tableBody.append(`
            <tr>
                <td>${fileType}</td>
                <td>
                    <button class="btn btn-danger btn-large process-btn" dlink="${dlink}" data-index="${index}">Download <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-cloud-arrow-down-fill" viewBox="0 0 16 16">  <path d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2m2.354 6.854-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 9.293V5.5a.5.5 0 0 1 1 0v3.793l1.146-1.147a.5.5 0 0 1 .708.708"/></svg></button>
                    <button class="btn btn-info btn-sm xplay-btn" data-index="${index}" data-dlink="${dlink}" data-blob=""><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-play-circle-fill" viewBox="0 0 16 16">  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814z"/></svg></button>
				</td>
            </tr>
        `);
        }
initPlayButtons();
    }

$(document).on('click', '.process-btn', function() {
    let index = $(this).data('index');
    if (index >= 0) {
        var all_buttons = document.getElementsByClassName('process-btn')[index];
        all_buttons.innerText = 'Downloaded';  
        var dlink = all_buttons.getAttribute('dlink');
       // alert(dlink);
        window.location.href = dlink;   
       all_buttons.className = 'btn btn-info btn-large process-btn';          
    } else {
        alert("Invalid file selection");
    }
});

function extFailed(filename){
    $('#process').hide();
	$('#progdata').html('<b>❌ Extraction failed for ' + filename + '</b>');
}

function getExtension(fileName) {
    const lastDot = fileName.lastIndexOf('.');
    if (lastDot === -1 || lastDot === 0) return false; // No extension or hidden file

    const ext = fileName.slice(lastDot + 1).toLowerCase();
    return allowedFormats.includes(ext) ? true: false;
}

 var tip = 'mp3, m4a, wav, aac, alac, ogg, flac, opus, aif, aiff, wma';

tippy('#infoBtn', {
    content: tip,
    placement: 'top',
    animation: 'shift-away',
    arrow: true,
  });
  
const wavePlayers = {};

function initPlayButtons() {
    const playButtons = document.querySelectorAll('.xplay-btn');

    // Preload blobs
    playButtons.forEach(async (button) => {
      if (!button.dataset.blob) {
        const dlink = button.dataset.dlink;
        try {
          const response = await fetch(dlink);
          const arrayBuffer = await response.arrayBuffer();
          const blob = new Blob([arrayBuffer], { type: 'audio/mpeg' });
          const blobUrl = URL.createObjectURL(blob);
          button.dataset.blob = blobUrl;
        } catch (err) {
          console.error('Failed to preload:', dlink, err);
        }
      }
    });

    // Click event handling
    playButtons.forEach(button => {
      button.addEventListener('click', async function () {
        const index = this.dataset.index;
        const blobUrl = this.dataset.blob;

        // Pause others
        Object.entries(wavePlayers).forEach(([key, ws]) => {
          if (key !== index && ws.isPlaying()) {
            ws.pause();
            const btn = document.querySelector(`.xplay-btn[data-index="${key}"]`);
            if (btn) btn.innerHTML= '<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-play-circle-fill" viewBox="0 0 16 16">  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814z"/></svg>';          }
        });

        if (!wavePlayers[index]) {
          wavePlayers[index] = WaveSurfer.create({
            container: document.createElement('div'), // hidden
          });
        }

        const wavesurfer = wavePlayers[index];

        if (!wavesurfer.isReady) {
          wavesurfer.load(blobUrl);
          wavesurfer.on('ready', () => {
            wavesurfer.play();
             this.innerHTML= '<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-pause-circle-fill" viewBox="0 0 16 16">  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M6.25 5C5.56 5 5 5.56 5 6.25v3.5a1.25 1.25 0 1 0 2.5 0v-3.5C7.5 5.56 6.94 5 6.25 5m3.5 0c-.69 0-1.25.56-1.25 1.25v3.5a1.25 1.25 0 1 0 2.5 0v-3.5C11 5.56 10.44 5 9.75 5"/></svg>';
          });
          wavesurfer.on('finish', () => {
           this.innerHTML= '<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-play-circle-fill" viewBox="0 0 16 16">  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814z"/></svg>';
          });
        } else {
          if (wavesurfer.isPlaying()) {
            wavesurfer.pause();
            this.innerHTML= '<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-play-circle-fill" viewBox="0 0 16 16">  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814z"/></svg>';
          } else {
            wavesurfer.play();
             this.innerHTML= '<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-pause-circle-fill" viewBox="0 0 16 16">  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M6.25 5C5.56 5 5 5.56 5 6.25v3.5a1.25 1.25 0 1 0 2.5 0v-3.5C7.5 5.56 6.94 5 6.25 5m3.5 0c-.69 0-1.25.56-1.25 1.25v3.5a1.25 1.25 0 1 0 2.5 0v-3.5C11 5.56 10.44 5 9.75 5"/></svg>';
          }
        }
      });
    });
  }

$('#reportbutton').on("click",function() {
  send_report();
});

function send_report(){
    $("#reportbutton").html('Sending...');
   let email = getCookie("uemail");
   //var issue = $("option:selected", $("#cars")).text()
   //var splink = $("#splink").val();
   var comment = $("#comment").val();
   $.ajax({
                url: "/api/issues.php",
                type: "get",
                dataType: "text",
                data: {
                    comment: comment,
                    email: email
                },
                success: function(b) {
                  $("#reportbutton").html('Report Sent! We will look into this.');
                  $('#reportbutton').prop('disabled', true);
                }
   });
}
</script>
    
<style>

 
 </style>
</html>
