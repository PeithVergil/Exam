(function($) {$(function() {
	var Record = Backbone.Model.extend({
	});

	var records = new Backbone.Collection;

	var AddRecordView = Backbone.View.extend({
		el: $('#mod-add'),

		initialize: function(rectable) {
			var self = this;

			self.template = _.template($('#tpl-record-row').html());

			self.recbody = rectable.find('tbody');

			self.form = self.$el.find('form');

			self.form.submit(function(e) {
				e.preventDefault();
				self._onSubmit(e);
			});
		},

		show: function() {
			this.$el.modal('show');
		},

		hide: function() {
			this.$el.modal('hide');
		},

		clear: function() {
			this.form.find('input[type=text]').val('');
		},

		_onSubmit: function(e) {
			var self = this;

			var data = self.form.serialize();
			
			$.post(URL_RECORD_ADD, data, function(response) {
				self.recbody.append(self.template({
					record: response
				}));
			}, 'json');

			self.clear();		
			self.hide();
		}
	});
	var addRecView = new AddRecordView($('#records'));
	
	var RecordsView = Backbone.View.extend({
		el: $('#records'),
		
		initialize: function() {
			var self = this;

			$('#btn-add').click(function(e) {
				addRecView.show();
			});

			$('#btn-del').click(function(e) {
				self._onClick_Del(e);				
			});

			$('.btn-edt').live('click', function(e) {
				self.editrow = $(this);
				self._onClick_Edt(e);
			});

			$('#ckbx-all').click(function(e) {
				self.selectall = $(this).is(':checked');
				self._onClick_All(e);
			});

			$('.ckbx-usr').live('click', function(e) {
				self._onClick_Usr(e);
			});
		},

		_onClick_Del: function(e) {
			var data = $('#form-records').serialize();

			$.post(URL_RECORD_DEL, data, function(response) {
				$('.ckbx-usr:checked').each(function() {
					var $row = $(this).parent().parent();

					$row.fadeOut('slow', function() {
						$row.remove();
					});
				});
			}, 'json');
		},

		_onClick_Edt: function(e) {
			alert(this.editrow.attr('value'));
		},

		_onClick_All: function(e) {
			var self = this;

			if (self.selectall) {
				$('.ckbx-usr').attr('checked', true);
			} else {
				$('.ckbx-usr').attr('checked', false);
			}
		},

		_onClick_Usr: function(e) {
		},
	});
	var recordView = new RecordsView;
		
});})(jQuery);
