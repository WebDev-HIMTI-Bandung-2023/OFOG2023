$.ajax({
    url      : 'https://himti.or.id/feed.php',
    dataType : 'json',
    success  : function (data) {
        var datas = data.channel.item;
        console.log(datas);
        for (var i = 0; i < 10; i++) {
            var h = document.getElementById("RSSarticle");
            var dataarticle = datas[i];
            // console.log(dataarticle.title);
            // console.log(dataarticle.enclosure["@attributes"].url);
            var linkimg = dataarticle.enclosure ? dataarticle.enclosure["@attributes"].url : "https://picsum.photos/id/1/300/200";
            var template = `
            <a href="${dataarticle.link}?utm_source=himti.or.id&utm_campaign=himti2021" class="card article bg-dark text-white p-0">
                <img src="${linkimg}" class="card-img" style="width: 100%; height: 100%; object-fit: cover; filter: brightness(0.5)">
                <div class="card-img-overlay" style="margin-top: auto">
                    <h5 class="card-title fw-bold">${dataarticle.title}</h5>
                    <p class="card-text">${new Date(dataarticle.pubDate).toDateString()}</p>
                </div>
            </a>
            `;

            h.insertAdjacentHTML("beforeend", template);
        }
    }
  });
  
