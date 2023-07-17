document.addEventListener('DOMContentLoaded', function () {
    window.addEventListener('scroll', function () {
      var scrollPercentage = (document.documentElement.scrollTop + document.body.scrollTop) / (document.documentElement.scrollHeight - document.documentElement.clientHeight) * 100;
      var footer = document.querySelector('footer');
      footer.style.backgroundColor = 'hsl(' + scrollPercentage + ', 100%, 50%)';
    });
  });
  