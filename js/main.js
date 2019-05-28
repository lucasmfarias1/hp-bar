$('.btn-cardapio').click((e) => {
  const ativo = $('.cardapio').data('ativo');
  const btn = e.target;
  const abaAbrir = btn.dataset.aba;

  switch (abaAbrir) {
    case 'burgers':
      $('.cardapio').data('ativo', 'burgers');
      $('#cardapio-porcoes').slideUp();
      $('#cardapio-bebidas').slideUp();
      if (ativo !== 'burgers') {
        $('#cardapio-burgers').slideDown();
      }
      break;

    case 'porcoes':
      $('.cardapio').data('ativo', 'porcoes');
      $('#cardapio-burgers').slideUp();
      $('#cardapio-bebidas').slideUp();
      if (ativo !== 'porcoes') {
        $('#cardapio-porcoes').slideDown();
      }

      break;

    case 'bebidas':
      $('.cardapio').data('ativo', 'bebidas');
      $('#cardapio-burgers').slideUp();
      $('#cardapio-porcoes').slideUp();
      if (ativo !== 'bebidas') {
        $('#cardapio-bebidas').slideDown();
      }

      break;

    default:
      break;
  }
});

// #cardapio-burgers
// #cardapio-porcoes
// #cardapio-bebidas 