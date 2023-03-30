<div class="content-table">
    <div class="content-table-header">
        <div></div>
        <h2>Table of content</h2>
        <div class="content-table-icon-container">
            <img class="content-table-icon" src="/img/icons/hammburger.png" />
        </div>
    </div>

    <div class="content-table-data">
        <div class="content-table-data-col-one">
            <ol class="numeric-list">
                <li><a href="#Company">Company Overview</a></li>
                <li><a href="#Price">Prices and Discounts</a></li>
                <li><a href="#Services">Services Quality</a></li>
                <li>Online Reputation
                    <ol class="alpha-list">
                        <li>
                            Sitejabber
                        </li>
                        <li>
                            Trustpilot
                        </li>
                        <li>
                            Reddit
                        </li>
                    </ol>
                </li>


            </ol>

        </div>
        <div class="content-table-data-col-two">
            <ol class="numeric-list" start="5">

                <ol class="alpha-list" start="4">
                    <li>
                        Other Review Websites
                    </li>
                    <li>
                        Social Media Activity
                    </li>
                </ol>

                <li><a href="#Customer">Customer Support</a></li>
                <li><a href="#Guarantees">Guarantees</a></li>
                <li><a href="#Conclusion">Conclusion</a></li>
                <li><a href="#Frequently">Frequently Asked Questions</a></li>
            </ol>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>

<script>
    $(".content-table-icon").on("click", function() {
        if ($(".content-table").height() <= 70) {
            const img = document.querySelector(".content-table-icon")
            img.src = "/img/icons/hammburger-open.png"
            $(".content-table").animate({
                height: 270
            }, 250);
        } else {
            const img = document.querySelector(".content-table-icon")
            img.src = "/img/icons/hammburger.png"
            $(".content-table").animate({
                height: 70
            }, 250);
        }
    })
</script>
