// jQuery('.cat-list_item').on('click', function() {
// 	/* Ovdje prilikom klika na neku kategoriju mičemo klasu active sa svih button-a i dodajemo klasu active na kliknuti button */
//     jQuery('.cat-list_item').removeClass('active');
//     jQuery('.category-single-list').removeClass('active-list-item');  

//     jQuery(this).parent().addClass('active-list-item');  
//     jQuery(this).addClass('active');

//     post_id = jQuery(this).attr("data-post_id");

//     jQuery.ajax({
//       type: 'POST',
//       url:  adminAjax, // url koji je definiran u footer.php, on govori gdje nam se nalazi ajax-admin.php koja je core php datoteka unutar wordpressa
//       dataType: 'html',
//       data: {
//         action: 'filter_projects', // funkcija koju kreiramo u ajax.php, ona će biti povezana s ovim ajax pozivom
//         category: jQuery(this).data('slug'), // dohvati slug iz atributa data-slug od kliknutog button-a
//         page_id: curr_post_id // obavezno nam treba ID trenutnog page-a
//       },
//       success: function(res) {
//         //   console.log(jQuery.ajax);
//         jQuery('.card-list').html(res); // ako je 200 (ok), onda u html ispiši rezultate
//       }
//     })
//   });


// ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// var page = 1;

// jQuery("#more_posts").on("click", function(e) {


//   jQuery.ajax({
//      // use the ajax object url
//      type: 'POST',
//      url: adminAjax,
//      data: {
//      action: "more_post_ajax", // add your action to the data object
//      offset: page * 3 //  page # x your default posts per page
//      },
//      success: function(data) {
//       // add the posts to the container and add to your page count
//       page++;
//       jQuery('.projects').append(data);
//       // console.log(page);

//      },
//      error: function(data) {
//       // test to see what you get back on error
//       // console.log(data);
//      }
//   });

// });