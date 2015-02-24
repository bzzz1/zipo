@extends('partials/admin_layout')
@extends('partials/admin_header')
@extends('partials/admin_sidebar')
@extends('partials/admin_footer')
@section('css')
	{{ HTML::style('css/admin.css') }}<!--delete it-->
@stop

@section('body')
	<h1 class="admin_uni_heading">Панель управления</h1>
	@if (Session::get('message'))
		{{ Session::get('message') }}
	@endif
	<div class="admin_main_content">
		<div class="admin_panel_import">
			<p class="admin_uni_label"><i class="fa fa-reply"></i> Импорт</p>
			{{ Form::open(['url'=>'/admin/import', 'files'=>true, 'method'=>'POST', 'class'=>'admin_panel_import']) }}
				{{ Form::file('excel', ['class'=>'admin_panel_input']) }}
				{{ Form::submit('Импортировать', ['class'=>'btn admin_uni_button']) }}
			{{ Form::close() }}
			<a href="" id="trigger_link" class="btn admin_uni_button">Выбрать файл</a>
			<script>
				$('#trigger_link').click(function(e){
				    e.preventDefault();
				    $('.admin_panel_input').trigger('click');
				});
				(function ( $, window, document, undefined ) {

			    var defaults = {
			        buttonText: "Browse",
			        buttonClass: "btn admin_uni_button",
			        selectedFileClass: 'selected-file',
			        selectedFileEmptyText: ' No File',
			    };

			    function FilePrettify( element, options ) {
			        this.element = element;
			        this.$element = $(element);
			        this.options = $.extend( {}, defaults, options) ;
			        
			        this._defaults = defaults;
			        
			        this.init();
			    }

			    FilePrettify.prototype.updateSelectedFile = function(fileName){
			        if(!fileName)
			            this.$selectedFile.html(' ' + this.options.selectedFileEmptyText);
			        else
			            this.$selectedFile.html(' ' + fileName.replace("C:\\fakepath\\", ""));
			    }

			    FilePrettify.prototype.init = function () {
			        var self = this;
			        var $elem = this.$element;
			        $elem.hide();
			        var $button = $('<button class = "' + this.options.buttonClass + '">' +
			                this.options.buttonText + '</button>');
			        var $selectedFile = $('<span class = "' + this.options.selectedFileClass 
			                + '">' + this.options.selectedFileEmptyText + '</span>');
			        $button.on('click.fileprettify', function(e){
			            console.log($elem);
			            e.preventDefault();
			            $elem.click();
			        });
			        $($elem.parent()).append($button);
			        $($elem.parent()).append($selectedFile);
			        
			        $elem.on('change.fileprettify', function(e){
			            var fileName = $(this).val();
			            self.updateSelectedFile(fileName);
			        });

			        this.$button = $button;
			        this.$selectedFile = $selectedFile;
			        this.updateSelectedFile($elem.val());
			    };

			    $.fn.fileprettify = function ( options ) {
			        return this.each(function () {
			            if (!$.data(this, 'fileprettify' )) {
			                $.data(this, 'fileprettify' , 
			                new FilePrettify( this, options ));
			            }
			        });
			    }

			})( jQuery, window, document )



			$('input').fileprettify()

			</script>	
		</div>
		<div class="admin_panel_search">
			<p class="admin_uni_label"><i class="fa fa-search"></i> Поиск по артикулу</p>
			{{ Form::open(array('url' => "/admin/search", 'method' => 'GET', 'class'=>'')) }}
				{{ Form::text('query', null, ['placeholder'=>"Поиск по каталогу", 'class'=>'form-control input_search', 'id' =>'search']) }} 
				{{ Form::submit('Поиск', ['class'=>'btn admin_uni_button']) }}
			{{ Form::close() }}
		</div>
		<div class="admin_panel_discount">
			<p class="admin_uni_label">% Скидка для<br> зарегестрированных<br> пользователей</p>
			{{ Form::open(array('url' => "/admin/set_discount?discount=$discount", 'method' => 'POST', 'class'=>'')) }}
				{{ Form::text('discount', $discount, ['class'=>'form-control']) }} 
				{{ Form::submit('Изменить', ['class'=>'btn admin_uni_button']) }}
			{{ Form::close() }}
		</div>
	</div>
@stop
