$(function()
{
  $(document).on('submit', 'form', function(e)
  {
    var data = {}
    var email = $(this).find('input[type="email"]').val(),
        data = {};
    data[email] = []

    $(this).find('.entry').each(function()
    {
      var entry = {};
      entry[$(this).find('input').val()] = $(this).find('select').val();
      data[email].push(entry);
    });

    $('<input type="hidden" name="json"/>').val(JSON.stringify(data)).appendTo(this);
  }
  )
    $(document).on('click', '.btn-add', function(e)
    {
        e.preventDefault();

        var controlForm = $(this).parents('.modal-body'),
            currentEntry = $(this).parents('.row');

        if (controlForm.children().length < 5) {
          var newEntry = $(currentEntry.clone()).appendTo(controlForm);
          newEntry.find('input').val('');
          controlForm.find('.row:not(:last) .btn-add')
              .removeClass('btn-add').addClass('btn-remove')
              .removeClass('btn-success').addClass('btn-danger')
              .html('<span class="glyphicon glyphicon-minus"></span>');
          if (controlForm.children().length == 5) {
            newEntry.find('.btn-add').attr('disabled', 'disabled');
          }
        }
    }).on('click', '.btn-remove', function(e)
    {
      $(this).parents('.modal-body').find('.btn-add').attr('disabled',null)
  		$(this).parents('.row:first').remove();
    e.preventDefault();
		return false;
	});
});
