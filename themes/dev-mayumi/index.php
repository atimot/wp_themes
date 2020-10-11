<!doctype html>
<html lang="ja">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/custom.css">

        <title>Hello, world!</title>
    </head>
    <body>
        <section>
            <div class="container d-flex align-items-center">
                <div>
                    <p class="m-0 d-block">CALLIGRAPHER</p>
                    <img class="m-0 d-block logo-shinjapan" src="<?php echo get_template_directory_uri(); ?>/images/logo_shinjapan.png" alt="">
                    <img class="d-block logo-shomayumi" src="<?php echo get_template_directory_uri(); ?>/images/logo_shomayumi.png" alt="">
                </div>
            </div>
        </section>
        
        <section>
            <div class="container d-flex align-items-center">
                <div class="mx-auto d-block">
                    <div class="card border-0">
                        <img class="card-img mx-auto d-block backimg-hinomaru" src="<?php echo get_template_directory_uri(); ?>/images/backimg_hinomaru.png" alt="">
                        <img class="card-img-overlay mx-auto d-block logo-shinjapan" src="<?php echo get_template_directory_uri(); ?>/images/logo_shinjapan.png" alt="">
                        <div class="card-img-overlay mx-auto d-block hinomaru-text">
                            <p class="text-center">この文章はダミーです。<br>どうしてCOOL JAPANを掲げてやろうと思ったのかの理由を<br>ここで述べます。そうすることで書道を通して何を<br>したいのか伝えたいのかを明確に伝え、<br>このページを見る人を惹き込みます。</p>
                        </div>
                        <img class="card-img-overlay mx-auto d-block logo-shomayumi" src="<?php echo get_template_directory_uri(); ?>/images/logo_shomayumi.png" alt="">
                    </div>

                </div>
            </div>
        </section>

        <section>
            <div class="container d-flex align-items-center">
                <div class="mx-auto d-block"> 
                    <h1 class="text-center section-title">WORKS</h1>
                    <img src="" alt="">
                    <p class="text-center">comming soon ...</p>
                    <p class="text-center">MORE</p>
                </div>
            </div>
        </section>

        <section>
            <div class="container d-flex align-items-center">
                <div class="mx-auto d-block">
                    <h1 class="text-center section-title">WORK INTRODUCTION</h1>
                    <p class="text-center">comming soon ...</p>
                    <p class="text-center">MORE</p>
                </div>
            </div>
        </section>

        <section>
            <div class="container  d-flex align-items-center">
                <div class="mx-auto d-block">
                    <h1 class="text-center section-title">NEWS</h1>
                    <p class="text-center">sample news</p>
                    <p class="text-center">sample news</p>
                    <p class="text-center">sample news</p>
                    <p class="text-center">sample news</p>
                    <p class="text-center">sample news</p>
                    <p class="text-center">MORE</p>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="">
                    <h1 class="text-center section-title">PROFIRE</h1>
                    <img class="profile-img float-left" src="<?php echo get_template_directory_uri(); ?>/images/profile_img.png" alt="">
                    <p>CALLIGRAPHER</p>
                    <H1>真弓  将</H1>
                    <p>SHO MAYUMI</p>
                    <p class="profile-text">12歳より書を学び、野球部に在籍する傍ら、ほぼ独学で書に励んでいる。<br>高校時代は石川・星稜高校野球部に在籍し、1年夏、3年夏に全国高校野球選手権に出場。そして高校卒業時には、当時の監督の意向で同行の室内練習場に格言『耐えて勝つ』『心温かきは万能なり』など、約20枚の作品を寄贈した。さらに2019年春のセンバツに北信越地区代表として同校が出場した際には、チームのモットー『一味同心』を朝日新聞社に揮毫し、センバツ特集“書道アーティストを目指すOB”として紹介された。<br>現在は京都先端科学大学・硬式野球部に在籍しており、野球で得た感性を書道にも活かせないかと、日々試行錯誤を繰り返す。<br>将来は世界中の人に日本の書を発信し、『COOL JAPAN』を広める活動を目標に掲げている。</p>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <!-- <div class="mx-auto"> -->
                    <h1 class="text-center section-title">CONTACT</h1>
                    
                    <form action="confirm.php" method="post" name="Form1">
                    <div class="form-group row justify-content-center">
                        <label class="control-label col-2">氏名*　</label>
                        <div class="col-5">
                            <input type="text" class="form-control rounded-0" placeholder="フォーム太朗" name="name" required>
                        </div>
                    </div>

                    <div class="form-group row justify-content-center">
                        <label class="control-label col-2">所在地*　</label>
                        <div class="col-5">
                            <input type="text" class="form-control rounded-0" placeholder="○○県△△市□□町xxxx-yy-z" name="address">
                        </div>
                    </div>

                    <div class="form-group row justify-content-center">
                        <label class="control-label col-2">電話番号*　</label>
                        <div class="col-5">
                            <input type="text" class="form-control rounded-0" placeholder="xxx-yyyy-zzzz" name="phone">
                        </div>
                    </div>

                    <div class="form-group row justify-content-center">
                        <label class="control-label col-2">メールアドレス*　</label>
                        <div class="col-5">
                            <input type="email" class="form-control rounded-0" placeholder="xxxxxx@yahoo.co.jp" name="email" required>
                        </div>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group row justify-content-center">
                        <label class="control-label col-2">お問い合わせ内容*　</label>
                        <div class="col-5">
                            <textarea placeholder="お問い合わせ内容" rows="10" class="form-control rounded-0" name="main" required></textarea>
                        </div>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn border border-white rounded-0">　送　信　</button>
                    </div>
                    </form>
                <!-- </div> -->
            </div>
        </section>

        <footer>
            footer
        </footer>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>