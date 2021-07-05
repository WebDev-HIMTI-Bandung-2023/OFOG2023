// const RSS_URL = `https://himti.or.id/feed.php`;
//         $.ajax(RSS_URL, {
//             accepts: {
//                 json: "application/json"
//             },
            
//             dataType: "json",

//             success: function (data) {
//                 var data1 = $(data).find("item");
//                 console.log(data1);
//                 for (var i = 0; i < 5; i++) {
//                     var h = document.getElementById("RSSarticle");
//                     var el = data1[i];
//                     console.log(el.children[0].textContent);
//                     console.log(el.children);
//                     var awal;
//                     var akhir;
//                     var data12;
//                     if (el.children[11].localName == "enclosure") {
//                         awal = el.children[11].outerHTML.indexOf("https://");
//                         akhir = el.children[11].outerHTML.indexOf('" type');
//                         data12 = el.children[11].outerHTML.slice(awal, akhir);
//                     }
//                     else if (el.children[12].localName == "enclosure") {
//                         awal = el.children[12].outerHTML.indexOf("https://");
//                         akhir = el.children[12].outerHTML.indexOf('" type');
//                         data12 = el.children[12].outerHTML.slice(awal, akhir);
//                     }
//                     console.log(data12);
//                     const template = `
//                             <div class="my-card1">
//                                 <div class="ourarticlerow">
//                                     <img src="${data12}" alt="" width="100%">
//                                     <div class="ourarticleitem">
//                                         <p>${el.children[0].textContent}</p>
//                                     </div>
//                                 </div>
//                             </div>
//                             `;

//                     h.insertAdjacentHTML("beforeend", template);
//                 }
//             }
//         });
{/* <div class="my-card1">
                        <div class="ourarticlerow">
                            <img src="${linkimg}" alt="" width="100%">
                            <div class="ourarticleitem">
                                <p>${dataarticle.title}</p>
                            </div>
                        </div>
                    </div> */
                    
            //         <div class="card" style="width: 18rem;">
            // <img class="card-img-top" src="${linkimg}" alt="Card image cap">
            // <div class="card-body">
            //     <h5 class="card-title">Card title</h5>
            //     <p class="card-text">${dataarticle.title}</p>
            //     <a href="#" class="btn btn-primary">Go somewhere</a>
            // </div>
            // </div>
        }
$.ajax({
    url      : 'https://himti.or.id/feed.php',
    dataType : 'json',
    success  : function (data) {
        var datas = data.channel.item;
        console.log(datas);
        for (var i = 0; i < 10; i++) {
            var h = document.getElementById("RSSarticle");
            var dataarticle = datas[i];
            console.log(dataarticle.title);
            console.log(dataarticle.enclosure["@attributes"].url);
            var linkimg = dataarticle.enclosure["@attributes"].url
            const template = `
                <a href="${dataarticle.guid}" class="card">
                    <div >
                        <div class="imagecontainer">
                            <img src="${linkimg}">
                        </div>
                        <p class="card-text">${dataarticle.title}</p>
                    </div>
                </a>
                    
                    `;

            h.insertAdjacentHTML("beforeend", template);
        }
        $num = $('.my-card1').length;
        console.log($num);
        $even = $num / 2;
        $odd = ($num + 1) / 2;

        if ($num % 2 == 0) {
            $('.my-card1:nth-child(' + $even + ')').addClass('activecarousel1');
            $('.my-card1:nth-child(' + $even + ')').prev().addClass('prev');
            $('.my-card1:nth-child(' + $even + ')').next().addClass('next');
        } else {
            $('.my-card1:nth-child(' + $odd + ')').addClass('activecarousel1');
            $('.my-card1:nth-child(' + $odd + ')').prev().addClass('prev');
            $('.my-card1:nth-child(' + $odd + ')').next().addClass('next');
        }

        $('.my-card1').click(function () {
            $slide = $('.activecarousel1').width();
            // console.log($('.activecarousel1').position().left);

            if ($(this).hasClass('next')) {
                $('.card-carouselcustom').stop(false, true).animate({ left: '-=' + $slide });
            } else if ($(this).hasClass('prev')) {
                $('.card-carouselcustom').stop(false, true).animate({ left: '+=' + $slide });
            }

            $(this).removeClass('prev next');
            $(this).siblings().removeClass('prev activecarousel1 next');

            $(this).addClass('activecarousel1');
            $(this).prev().addClass('prev');
            $(this).next().addClass('next');
        });


        // Keyboard nav
        $('html body').keydown(function (e) {
            if (e.keyCode == 37) { // left
                $('.activecarousel1').prev().trigger('click');
            }
            else if (e.keyCode == 39) { // right
                $('.activecarousel1').next().trigger('click');
            }
        });
    }
  });
  