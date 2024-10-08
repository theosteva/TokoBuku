function getDataByWindowUrlKey(){
  let windowUrl = $(location).attr('href'); 
  let windowUrlKey = windowUrl.replace(/\/\s*$/, "").split('/').pop();
  let url = baseUrl+'/api/book/'+windowUrlKey;
  
  axios.get(url,{},apiHeaders)
  .then(function (response) {
    console.log('[DATA] response..',response.data);
    let template = '';

    $('.product-img-main-href').attr('href',response.data.cover);
    $('.product-img-main-src').attr('src',response.data.cover);
    $('#product-name').html(response.data.title);
    $('#product-price').html('IDR '+parseFloat(response.data.price).toLocaleString());
    $('#product-description').html(response.data.description);
    $('#product-author').html(response.data.author);
    $('#product-id').html(response.data.id);
    $('#product-publisher').html('First published '+response.data.publication_year+' by '+response.data.publisher);

    // START -- note, unless you have these data in a database structure, here we are hardcoding them for display purposes
      // review
      let stars = randomIntFromInterval(1,5);
      template = '';
      for (let index = 0; index < 5; index++) {
        template += '<i class="'+(index<stars?'yellow':'')+' icon_star"></i>';
      }
      $('#product-review-stars').html(template);
      $('#product-review-body-count').html(randomIntFromInterval(1,1000)+' customer review');
      // status stock
      let statusStock = randomIntFromInterval(0,1);
      $('#product-status-stock').addClass(statusStock?'in-stock':'out-of-stock');
      $('#product-status-stock').html(statusStock?'<p>Available: <span>In stock</span></p>':'<p>Available: <span>Out of stock</span></p>');
      if(!statusStock){
        $('.product-add-to-cart').hide();
        $('.product-add-to-cart-is-disabled').show();
      }
      // tag
      let collectionOfTag = ['Book','EBook','Best Seller','Fiction','Education','Literature','Classics','Real Event','Young Adult','Religion','Health','Comic','Horror','Poem','Filmed','Encyclopedia','In English','In Indonesian'];
      let selectedTags    = collectionOfTag.sort(() => .5 - Math.random()).slice(0, 4); // only get 4, randomly, from collectionOfTag
      template = '';
      for (let index = 0; index < selectedTags.length; index++) {
        template += '<a href="#">'+selectedTags[index]+'</a>'+(index!=selectedTags.length-1?', ':'');

      }
      $('#product-tags').html(template);
    // END ----
    // Tambahkan kode ini
    $('#purchase-link').attr('href', baseUrl + '/payment/create/' + response.data.id);
  })
  .catch(function (error) {
    console.log('[ERROR] response..',error.code);
    if(error.code == "ERR_BAD_REQUEST"){
      Swal.fire({
        position: "top-end",
        icon: "warning",
        title: "Yaah...",
        html: "Produk yang Anda cari tidak ditemukan",
        showConfirmButton: false,
        timer: 5000
      });
    }else{
      Swal.fire({
        icon: 'error',
        width: 600,
        title: "Error",
        html: error.message,
        confirmButtonText: 'Ya',
      });
    }
  });
}

$(function () {
  getDataByWindowUrlKey();
});

// Add this at the end of the file
$('#add-to-wishlist').on('click', function(e) {
    e.preventDefault();
    let bookId = window.location.pathname.split('/').pop();
    
    console.log('Attempting to add book to wishlist. Book ID:', bookId);
    
    $.ajax({
        url: `${baseUrl}/wishlist/add`,
        method: 'POST',
        headers: apiHeaders,
        data: JSON.stringify({ book_id: bookId }),
        contentType: 'application/json',
        dataType: 'json',
        success: function(response) {
            console.log('Wishlist add success:', response);
            Swal.fire({
                position: "center",
                icon: "success",
                title: response.message,
                showConfirmButton: false,
                timer: 1500
            });
        },
        error: function(xhr, status, error) {
            console.error('Error adding book to wishlist:', xhr.responseText);
            let errorMessage = "Error adding to wishlist";
            if (xhr.responseJSON && xhr.responseJSON.message) {
                errorMessage = xhr.responseJSON.message;
            }
            Swal.fire({
                position: "center",
                icon: "error",
                title: errorMessage,
                showConfirmButton: false,
                timer: 1500
            });
        }
    });
});

