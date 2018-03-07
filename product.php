<?php
include('functions.php');
include('dbconfig.php');
drawHeader();
?>

        <!-- Content -->
        <section id="page-content" class="sidebar-left">
            <div class="container">
                <div class="row">
                    <!-- post content -->
                    <div class="content col-md-10">
                        <!-- Page title -->
                <div class="page-title">
                    <h1>Blog Masonry - Sidebar</h1>
                    <div class="breadcrumb float-left">
                        <ul>
                            <li><a href="#">Home</a>
                            </li>
                            <li><a href="#">Blog</a>
                            </li>
                            <li class="active"><a href="#">Sidebar</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- end: Page title -->

                <!-- Blog -->
                <div id="blog" class="grid-layout post-3-columns m-b-30" data-item="post-item">

                    <!-- Post item-->
                    <div class="post-item border">
                        <div class="post-item-wrap">
                            <div class="post-image">
                                <a href="#">
                                    <img alt="" src="images/blog/12.jpg">
                                </a>
                                <span class="post-meta-category"><a href="">Lifestyle</a></span>
                            </div>
                            <div class="post-item-description">
                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>
                                <h2><a href="#">Lighthouse, standard post with a single image
</a></h2>
                                <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>

                                <a href="#" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>

                            </div>
                        </div>
                    </div>
                    <!-- end: Post item-->

                    <!-- Post item YouTube-->
                    <div class="post-item border">
                        <div class="post-item-wrap">
                            <div class="post-video">
                                <iframe width="560" height="320" src="https://www.youtube.com/embed/dA8Smj5tZOQ" frameborder="0" allowfullscreen></iframe>
                                <span class="post-meta-category"><a href="">Video</a></span>
                            </div>
                            <div class="post-item-description">
                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>

                                <h2><a href="#">This is a example post with YouTube</a></h2>
                                <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>

                                <a href="#" class="item-link">Read More </a>

                            </div>
                        </div>
                    </div>
                    <!-- end: Post item YouTube-->

                    <!-- Post item-->
                    <div class="post-item border">
                        <div class="post-item-wrap">
                            <div class="post-slider">
                                <div class="carousel dots-inside arrows-visible arrows-only" data-items="1" data-loop="true" data-autoplay="true" data-lightbox="gallery">
                                    <a href="images/blog/11.jpg" data-lightbox="gallery-item">
                                        <img alt="" src="images/blog/16.jpg">
                                    </a>
                                    <a href="images/blog/16.jpg" data-lightbox="gallery-item">
                                        <img alt="" src="images/blog/11.jpg">
                                    </a>
                                </div>
                                <span class="post-meta-category"><a href="">Technology</a></span>
                            </div>

                            <div class="post-item-description">
                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>
                                <h2><a href="#">Simplicity, a post with slider gallery</a></h2>
                                <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet. Pulvinar euismod antesagittis ante posuere ligula pharetra laoreet.</p>

                                <a href="#" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>

                            </div>
                        </div>
                    </div>
                    <!-- end: Post item-->

                     <!-- Post item Vimeo-->
                    <div class="post-item border">
                        <div class="post-item-wrap">
                            <div class="post-video">
                                <iframe src="https://player.vimeo.com/video/198559065?title=0&byline=0&portrait=0" width="560" height="320" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                <span class="post-meta-category"><a href="">Video</a></span>
                            </div>
                            <div class="post-item-description">
                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>

                                <h2><a href="#">This is a example post with Vimeo video</a></h2>
                                <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.
                                Cagittis ante posuere ac. Fusce at velit id ligula pharetra laoreet.</p>

                                <a href="#" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>

                            </div>
                        </div>
                    </div>
                    <!-- end: Post item Vimeo-->



                    <!-- Post item HTML5 Audio-->
                    <div class="post-item border">
                        <div class="post-item-wrap">
                            <div class="post-audio">
                                <a href="#">
                                    <img alt="" src="images/blog/audio-bg.jpg">
                                </a>
                                <span class="post-meta-category"><a href="">Audio</a></span>
                                <audio class="video-js vjs-default-skin" controls preload="false" data-setup="{}">
                                    <source src="audio/beautiful-optimist.mp3" type="audio/mp3" />
                                </audio>
                            </div>
                            <div class="post-item-description">
                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>

                                <h2><a href="#">Self Hosted HTML5 Audio (mp3) with image cover</a></h2>
                                <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ac sagittis ante posuere ac ligula pharetra laoreet.</p>

                                <a href="#" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>

                            </div>
                        </div>
                    </div>
                    <!-- end: Post item-->

                     <!-- Post item-->
                    <div class="post-item border">
                        <div class="post-item-wrap">
                            <div class="post-image">
                                <a href="#">
                                    <img alt="" src="images/blog/17.jpg">
                                </a>
                                <span class="post-meta-category"><a href="">Science</a></span>
                            </div>
                            <div class="post-item-description">
                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>

                                <h2><a href="#">Lighthouse, standard post with a single image
</a></h2>
                                <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.
                                </p>

                                <a href="#" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>

                            </div>
                        </div>
                    </div>
                    <!-- end: Post item-->

                    <!-- Post item-->
                    <div class="post-item border">
                        <div class="post-item-wrap">
                            <div class="post-image">
                                <a href="#">
                                    <img alt="" src="images/blog/18.jpg">
                                </a>
                                <span class="post-meta-category"><a href="">Science</a></span>
                            </div>
                            <div class="post-item-description">
                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>

                                <h2><a href="#">Lighthouse, standard post with a single image
</a></h2>
                                <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>

                                <a href="#" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>

                            </div>
                        </div>
                    </div>
                    <!-- end: Post item-->



                    <!-- Post item-->
                    <div class="post-item border">
                        <div class="post-item-wrap">
                            <div class="post-slider">
                                <div class="carousel dots-inside arrows-visible arrows-only" data-autoplay-timeout="2600" data-animate-in="fadeIn" data-animate-out="fadeOut" data-items="1" data-loop="true" data-autoplay="true" data-lightbox="gallery">
                                    <a href="images/blog/19.jpg" data-lightbox="gallery-item">
                                        <img alt="" src="images/blog/19.jpg">
                                    </a>
                                    <a href="images/blog/20.jpg" data-lightbox="gallery-item">
                                        <img alt="" src="images/blog/20.jpg">
                                    </a>
                                </div>
                                <span class="post-meta-category"><a href="">Technology</a></span>
                            </div>

                            <div class="post-item-description">
                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>
                                <h2><a href="#">Simplicity, a post with slider gallery</a></h2>
                                <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>

                                <a href="#" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>

                            </div>
                        </div>
                    </div>
                    <!-- end: Post item-->

                     <!-- Post item-->
                    <div class="post-item border">
                        <div class="post-item-wrap">
                            <div class="post-image">
                                <a href="#">
                                    <img alt="" src="images/blog/23.jpg">
                                </a>
                                <span class="post-meta-category"><a href="">Science</a></span>
                            </div>
                            <div class="post-item-description">
                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>

                                <h2><a href="#">Lighthouse, standard post with a single image
</a></h2>
                                <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>

                                <a href="#" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>

                            </div>
                        </div>
                    </div>
                    <!-- end: Post item-->

                </div>
                <!-- end: Blog -->

                <!-- Pagination -->
                <div class="pagination pagination-simple">
                    <ul>
                        <li>
                            <a href="#" aria-label="Previous"> <span aria-hidden="true"><i class="fa fa-angle-left"></i></span> </a>
                        </li>
                        <li><a href="#">1</a> </li>
                        <li><a href="#">2</a> </li>
                        <li class="active"><a href="#">3</a> </li>
                        <li><a href="#">4</a> </li>
                        <li><a href="#">5</a> </li>
                        <li>
                            <a href="#" aria-label="Next"> <span aria-hidden="true"><i class="fa fa-angle-right"></i></span> </a>
                        </li>
                    </ul>
                </div>
                <!-- end: Pagination -->

                    </div>
                    <!-- end: post content -->

                    <!-- Sidebar-->
                    <div class="sidebar col-md-2">
                        <div class="pinOnScroll">
                          <h4>Product Category</h4>
                          <ul class="list-icon list-icon-arrow">
                            <li><strong>Karaoke</strong></li>
                            <li><strong>Sound</strong>
                              <ul class="list-icon list-icon-arrow">
                                <li>ลำโพง</li>
                                <li>แอมป์</li>
                                <li>ไมโครโฟน</li>
                                <li>ซับวูฟเฟอร์</li>
                                <li>อุปกรณ์เสริม</li>
                              </ul>
                            </li>
                            <li><strong>CCTV</strong>
                              <ul class="list-icon list-icon-arrow">
                                <li>Promotion</li>
                                <li>กล้องวงจรปิด</li>
                                <li>เครื่องบันทึก</li>
                                <li>อุปกรณ์เสริม</li>
                                <li>เกร็ดความรู้</li>
                              </ul>
                            </li>
                            <li><strong>TJ Media</strong></li>
                          </ul>



                        </div>
                    </div>
                    <!-- end: Sidebar-->
                </div>
            </div>
        </section>
        <!-- end: Content -->




                <?php
        drawFooter();

                 ?>
