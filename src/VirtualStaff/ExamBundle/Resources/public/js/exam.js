(function($) {$(function() {
	var Record = Backbone.Model.extend({
		idAttribute: 'usrid'
	});

	var RecordsCollection = Backbone.Collection.extend({
		model: Record
	});
	var records = new RecordsCollection;

	records.on('add', function(record) {
		recordView.render(record);
	});

	var RecordView = Backbone.View.extend({
		template: $('#tpl-record').html(),

		render: function(record) {
			var self = this;

			var tpl = _.template(self.template);

			$('#records tbody').append(tpl(
				record.toJSON()
			));

			return self;
		}
	});
	var recordView = new RecordView;

	var RecordsView = Backbone.View.extend({
		el: $('#records'),

		initialize: function() {
			var self = this;

			self.getRecords();
		},

		getRecords: function() {
			$.getJSON(URL_RECORD_ALL, function(response) {
				_.each(response.records, function(record) {
					records.add(new Record({
						usrid: record.usrid,
						usrnm: record.usrnm,
						fname: record.fname,
						lname: record.lname
					}));
				});
			});
		}
	});
	var recordsView = new RecordsView;

	var ModalView = Backbone.View.extend({
		tpl: _.template($('#tpl-modal-form').html()),

		show: function() {
			this.$el.modal('show');
		},

		hide: function() {
			this.$el.modal('hide');
		}
	});

	var AddRecordView = ModalView.extend({
		el: $('#modal-form-add'),

		events: {
			'submit form': 'onSubmit'
		},

		render: function() {
			var self = this;

			self.$el.find('.modal-body').html(self.tpl({
				usrid: '',
				usrnm: '',
				fname: '',
				lname: ''
			}));

			return self;
		},
		
		onSubmit: function(e) {
			e.preventDefault();

			var form = this.$el.find('form');

			$.post(URL_RECORD_ADD, form.serialize(), function(response) {
				records.add(new Record({
					usrid: response.usrid,
					usrnm: response.usrnm,
					fname: response.fname,
					lname: response.lname
				}));
			}, 'json');

			this.hide();
		}
	});
	var addRecordView = new AddRecordView;

	var EdtRecordView = ModalView.extend({
		el: $('#modal-form-edt'),

		events: {
			'submit form': 'onSubmit'
		},

		render: function() {
			var self = this;

			self.$el.find('.modal-body').html(self.tpl(
				self.record.toJSON()
			));

			return self;
		},

		onSubmit: function(e) {
			e.preventDefault();

			var form = this.$el.find('form');

			$.post(URL_RECORD_EDT, form.serialize(), function(response) {
			}, 'json');

			this.hide();
		}
	});
	var edtRecordView = new EdtRecordView;

	var DocumentView = Backbone.View.extend({
		el: $('#body'),

		events: {
			'click #btn-add': 'onClick_Add',
			'click #btn-del': 'onClick_Del',
			'click .btn-edt': 'onClick_Edt'
		},

		onClick_Add: function() {
			addRecordView.render();
			addRecordView.show();
		},

		onClick_Del: function() {
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

		onClick_Edt: function(e) {
			e.preventDefault();
			var $t = $(e.target);

			var record = records.get($t.attr('value'));
			edtRecordView.record = record;
			edtRecordView.render();
			edtRecordView.show();
		}
	});
	var documentView = new DocumentView;
		
});})(jQuery);
