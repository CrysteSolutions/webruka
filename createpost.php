<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- <link rel="stylesheet" href="style_test.css"> -->
    <meta charset="utf-8">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
  </head>
  <body style="margin: 0%;">
    <div class="create-post">
      <div class="home-page-default">
        <?php 
        include topnavbar.php; 
        ?>

        <div class="container-24">
          <div class="wrapper">
            <aside id="sidebar">
              <div class="d-flex">
                <div class="sidebar-logo">
                  <img src="./images/download.jpeg" alt="profile-image"
                    class="profile-image">
                  <a href="#">G.H.L.Gamage</a>
                </div>
                <button class="toggle-btn" type="button">
                  <i class="lni lni-angle-double-right"></i>
                </button>
              </div>
              <ul class="sidebar-nav">
                <li class="sidebar-item">
                  <a href="#" class="sidebar-link">
                    <i class="lni lni-home"></i>
                    <span>Home</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="#" class="sidebar-link">
                    <i class="lni lni-circle-plus"></i>
                    <span>Creat Post</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="#" class="sidebar-link">
                    <i class="lni lni-user"></i>
                    <span>Account</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="#" class="sidebar-link">
                    <i class="lni lni-bar-chart"></i>
                    <span>Statistics</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="#" class="sidebar-link">
                    <i class="lni lni-users"></i>
                    <span>Connect Social Media</span>
                  </a>
                </li>

              </ul>
              <div class="sidebar-footer">
                <a href="#" class="sidebar-link">
                  <i class="lni lni-exit"></i>
                  <span>Logout</span>
                </a>
              </div>
            </aside>

          </div>
          <!-- <div class="flex_column"> -->
            <form class="flex_column">
              <div class="container-13">
                <div class="create-post-15">
                  Create Post
                </div>
                <div class="line-15">
                </div>
                <div class="container-20">
                  <div class="post-title">
                    <label for="post title">Post Title</label> <br>
                    <!-- <div class="rectangle-118"> -->
                    <input class="rectangle-118" name="post title" type="text"
                      placeholder="Type your post title here..."
                      id="post title" />
                  </div>
                  <!-- </div> -->
                </div>
                <div class="container-9">
                  <div class="select-social-media">
                    <label for="social media">Social Media</label>
                    <div class="frame-18">
                      <!-- <div class="expand-arrow">
                      </div> -->
                      <select name="social media" id="social media">
                        <option value="Facebook">Facebook</option>
                        <option value="Instagram">Instagram</option>
                        <option value="Twitter">Twitter</option>
                        <option value="LinkedIn">LinkedIn</option>
                        <option value="Reddit">Reddit</option>
                      </select>
                    </div>
                  </div>
                  <div class="container-18">
                    <span class="what-social-media-is-not-connected">
                      What social media is not connected
                    </span>
                  </div>
                </div>
                <div class="container-14">
                  <div class="container-4">
                    <div class="container-43">
                      <span class="choose-file">
                        Choose File
                      </span>
                    </div>
                    <div class="show-file-link">
                      Show File link
                    </div>
                  </div>
                  <div class="container-26">
                    <div class="ellipse-24">
                    </div>
                    <div class="delete">
                    </div>
                  </div>
                </div>

              </div>

              <div class="container-13">
                <div class="container-22">
                  <div class="container-49">
                    <div class="post-type">
                      Post Type
                    </div>

                    <div class="story">
                      <label for="story">
                        Story
                      </label>
                      <input type="checkbox" name="story" id="story">
                      <label for="reals">
                        Reals
                      </label>
                      <input type="checkbox" name="reals" id="reals">
                      <label for="post">
                        Post
                      </label>
                      <input type="checkbox" name="post" id="post">
                    </div>
                  </div>

                </div>
                <div class="container-28">
                  <div class="hashtag-caption">
                    <label for="hashtag">
                      Hashtag &amp; Caption
                    </label> <br>
                    <input class="container-6" name="hashtag" id="hashtag"
                      list="hashtaglist"
                      placeholder="Add hashtags (optional)" />
                    <datalist id="hashtaglist">
                      <option value="#instagram"></option>
                      <option value="#facebook"></option>
                      <option value="#twitter"></option>
                    </datalist>

                  </div>
                  <textarea class="container-44"
                    placeholder="Add your caption here .....">
                    </textarea>

                </div>
                <div class="publish-or-schedule">
                  <div class="container-40">
                    <div class="container-10">

                      <input class="container-18" type="checkbox"
                        name="publish-now"
                        id="publish-now" />
                      <label class="publish-now" for="publish-now">Publish
                        Now</label>
                    </div>
                    <div class="container-2">

                      <input class="container-18" type="checkbox"
                        name="schedule"
                        id="schedule" />
                      <label class="publish-now" for="schedule">Schedule</label>
                    </div>
                  </div>
                  <div class="line-16">
                  </div>
                  <div class="container-29">
                    <button class="container-27">
                      <span class="publish-now-46">
                        Publish Now
                      </span>
                    </button>
                    <button type="reset" class="container-5">
                      <span class="discard">
                        Discard
                      </span>
                    </button>
                    <button class="container-32">
                      <span class="preview">
                        Preview
                      </span>
                    </button>
                  </div>
                </div>
              </div>
            </form>
          <!-- </div> -->
          <form>
            <div class="container-41">
              <div class="container-7">
                <div class="your-prompt">
                  Your Prompt
                </div>
                <textarea class="rectangle-100"
                  placeholder="Enter your prompt">
                </textarea>
                <div class="tone-of-vice">
                  Tone of vice
                </div>
                <div class="container-8">
                  <button class="container-51">
                    <span class="polite">
                      Polite
                    </span>
                  </button>
                  <button class="container-23">
                    <span class="witty">
                      Witty
                    </span>
                  </button>
                  <button class="container-48">
                    <span class="friendly">
                      Friendly
                    </span>
                  </button>
                  <button class="container-34">
                    <span class="enthusiastic">
                      Enthusiastic
                    </span>
                  </button>
                </div>
                <div class="container-25">
                  <button class="container-17">
                    <span class="funny">
                      Funny
                    </span>
                  </button>
                  <button class="container-37">
                    <span class="informational">
                      Informational
                    </span>
                  </button>
                </div>
                <div class="container-42">
                  <div class="approximate-word">
                    Approximate word :
                  </div>
                  <input type="number" value="20" class="container-3">
                  <!-- <span class="20">
                      20
                    </span> -->
                </input>
              </div>
              <div class="container-1">
                <div class="generate-hashtags">
                  <label for="generate_hashtag">Generate hashtags</label>
                </div>
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" role="switch"
                    id="generate_hashtag" checked name="generate_hashtag"
                    style="width: 40px; margin-top: 25px;">
                  <!-- <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label> -->
                </div>
              </div>
              <div class="container-12">
                <div class="include-emoji">
                <label for="include_emoji">Include emoji</label> 
                </div>
                <!-- <div class="toggle-on-16"> -->
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch"
                      id="include_emoji" checked name="include_emoji"
                      style="width: 40px; margin-top: 25px;">
                    <!-- <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label> -->
                  </div>
                <!-- </div> -->
              </div>
              <button class="container-19">
                <div class="background-remover">
                </div>
                <div class="generate-with-ai">
                  Generate With AI
                </div>
              </button>
            </div>
            <div class="container-30">
              <span class="result">
                Result
              </span>
              
              <textarea class="container-18" name="
              result" placeholder="result">
              </textarea>
            </div>

            </textarea>
          </div>
        </form>

      </div>
    </div>
  </div>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
  <script src="script.js"></script>
</body>