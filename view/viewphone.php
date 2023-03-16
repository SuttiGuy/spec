<!-- Course section -->
<div class="col mb-5">
    <div class="card h-150">
        <a href="view/viewteam-detail.php?piece=<?=$result2['piece']?>" class="card-link">
            <!-- Product image-->
            <img class="card-img-top" src="img/<?=$result2['img'];?>" alt="..." />
            <!-- Product details-->
            <div class="card-body p-4">
                <div class="text-left">
                    <!-- Product name-->
                    <h5 class="fw-bolder course-name">
                        <center>
                            <?=$result2['namephone'];?> &nbsp;&nbsp;
                            <?=$result2['piece'];?>
                        </center>
                    </h5>
                    <!-- course tag line-->
                    <div class="course-note"><i class="fa fa-shield"></i> ราคา: &nbsp;
                        <?=$result2['piece'];?>
                    </div>
                    <!-- <div class="course-note"><i class="fas fa-graduation-cap"></i> - </div> -->
                    <div class="course-note"><i class="fa fa-futbol-o"></i> ขนาดโทรศัพท์: &nbsp;
                        <?=$result2['sizephone'];?>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>