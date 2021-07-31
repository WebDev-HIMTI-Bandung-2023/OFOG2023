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
            var linkimg = dataarticle.enclosure ? dataarticle.enclosure["@attributes"].url : "#";
            const template = `
                <a href="${dataarticle.link}?utm_source=himti.or.id&utm_campaign=himti2021" class="card article">
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
    }
  });
  
