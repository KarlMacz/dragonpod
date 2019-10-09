function ajax_request(url, method, data, success_callback) {
  $.ajax({
    url: url,
    method: method,
    data: data,
    dataType: 'json',
    success: success_callback,
    error: function(jqXHR, textStatus, errorThrown) {
      console.error(errorThrown);
      console.error(textStatus);
      console.log(jqXHR.responseText);
    }
  });
}

function ajax_data_request(url, method, data, success_callback) {
  $.ajax({
    url: url,
    method: method,
    data: data,
    dataType: 'json',
    cache: false,
    contentType: false,
    processData: false,
    success: success_callback,
    error: function(jqXHR, textStatus, errorThrown) {
      console.error(errorThrown);
      console.error(textStatus);
      console.log(jqXHR.responseText);
    }
  });
}

function delay_ajax_request(delayInSeconds, url, method, data, success_callback) {
  setTimeout(function() {
    ajax_request(url, method, data, success_callback);
  }, delayInSeconds);
}

function delay_ajax_data_request(delayInSeconds, url, method, data, success_callback) {
  setTimeout(function() {
    ajax_data_request(url, method, data, success_callback);
  }, delayInSeconds);
}

function slide_alert(status, content) {
  var status_class = '';
  var date_now = new Date();
  var time_now = date_now.getTime();

  switch(status) {
    case 'ok':
      status_class = ' success';
      break;
    case 'warning':
      status_class = ' warning';
      break;
    case 'fail':
      status_class = ' danger';
      break;
  }

  $('.slide-alert-group').append('<div id="slide-alert-' + time_now + '" class="slide-alert' + status_class + '">\
      <button type="button" class="close">\
        <span>&times;</span>\
      </button>\
      <div class="slide-alert-content text-center">' + content + '</div>\
    </div>');

  setTimeout(function() {
    $('#slide-alert-' + time_now).remove();
  }, 3000);
}

function showInterrupt() {
  $('.interrupt').fadeIn(200);
}

function hideInterrupt() {
  $('.interrupt').fadeOut(200);
}

$(document).ready(function() {
  $(function() {
    var current_url = window.location.href;

    $('.navbar .navbar-nav li a').each(function() {
      var this_element = $(this);

      if(current_url.endsWith('index.php')) {
        current_url = current_url.substring(0, current_url.length - 9);
      }

      if(this_element[0].href === current_url) {
        this_element.addClass('active');
      }
    });
  });

  $('.modal').on('shown.bs.modal', function(e) {
    $(this).find('[autofocus]').focus();
  });

  $('body').on('click', '.slide-alert > .close', function() {
    $(this).parent().remove();
  });
});
