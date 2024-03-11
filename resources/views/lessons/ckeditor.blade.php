{{-- <!DOCTYPE html><!--
	Copyright (c) 2014-2024, CKSource Holding sp. z o.o. All rights reserved.
	This file is licensed under the terms of the MIT License (see LICENSE.md).
-->

<html lang="en" dir="ltr">
	<head>
		<title>CKEditor 5 ClassicEditor build</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" href="https://c.cksource.com/a/1/logos/ckeditor5.png">
		<link rel="stylesheet" type="text/css" href="styles.css">
	</head>
	<body data-editor="ClassicEditor" data-collaboration="false" data-revision-history="false">
		<header>
			<div class="centered">
				<h1><a href="https://ckeditor.com/ckeditor-5/" target="_blank" rel="noopener noreferrer"><img src="https://c.cksource.com/a/1/logos/ckeditor5.svg" alt="CKEditor 5 logo">CKEditor 5</a></h1>
				<nav>
					<ul>
						<li><a href="https://ckeditor.com/docs/ck	editor5/" target="_blank" rel="noopener noreferrer">Documentation</a></li>
						<li><a href="https://ckeditor.com/" target="_blank" rel="noopener noreferrer">Website</a></li>
					</ul>
				</nav>
			</div>
		</header>
		<div class="message">
			<div class="centered">
				<h2>CKEditor 5 online builder demo - ClassicEditor build</h2>
			</div>
		</div>
		<div class="centered">
			<div class="row row-editor">
				<div class="editor-container">
					<div class="editor">
						<h2>Bilingual Personality Disorder</h2>
						<figure class="image image-style-side"><img src="https://c.cksource.com/a/1/img/docs/sample-image-bilingual-personality-disorder.jpg">
							<figcaption>One language, one person.</figcaption>
						</figure>
						<p>
							This may be the first time you hear about this made-up disorder but
							it actually isn’t so far from the truth. Even the studies that were conducted almost half a century show that
							<strong>the language you speak has more effects on you than you realize</strong>.
						</p>
						<p>
							One of the very first experiments conducted on this topic dates back to 1964.
							<a href="https://www.researchgate.net/publication/9440038_Language_and_TAT_content_in_bilinguals">In the experiment</a>
							designed by linguist Ervin-Tripp who is an authority expert in psycholinguistic and sociolinguistic studies,
							adults who are bilingual in English in French were showed series of pictures and were asked to create 3-minute stories.
							In the end participants emphasized drastically different dynamics for stories in English and French.
						</p>
						<p>
							Another ground-breaking experiment which included bilingual Japanese women married to American men in San Francisco were
							asked to complete sentences. The goal of the experiment was to investigate whether or not human feelings and thoughts
							are expressed differently in <strong>different language mindsets</strong>.
							Here is a sample from the the experiment:
						</p>
						<table>
							<thead>
								<tr>
									<th></th>
									<th>English</th>
									<th>Japanese</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Real friends should</td>
									<td>Be very frank</td>
									<td>Help each other</td>
								</tr>
								<tr>
									<td>I will probably become</td>
									<td>A teacher</td>
									<td>A housewife</td>
								</tr>
								<tr>
									<td>When there is a conflict with family</td>
									<td>I do what I want</td>
									<td>It's a time of great unhappiness</td>
								</tr>
							</tbody>
						</table>
						<p>
							More recent <a href="https://books.google.pl/books?id=1LMhWGHGkRUC">studies</a> show, the language a person speaks affects
							their cognition, behaviour, emotions and hence <strong>their personality</strong>.
							This shouldn’t come as a surprise
							<a href="https://en.wikipedia.org/wiki/Lateralization_of_brain_function">since we already know</a> that different regions
							of the brain become more active depending on the person’s activity at hand. Since structure, information and especially
							<strong>the culture</strong> of languages varies substantially and the language a person speaks is an essential element of daily life.
						</p>
					</div>
				</div>
			</div>
		</div>
		<footer>
			<p><a href="https://ckeditor.com/ckeditor-5/" target="_blank" rel="noopener">CKEditor 5</a>
				– Rich text editor of tomorrow, available today
			</p>
			<p>Copyright © 2003-2024,
				<a href="https://cksource.com/" target="_blank" rel="noopener">CKSource</a>
				Holding sp. z o.o. All rights reserved.
			</p>
		</footer>
		<script src="../build/ckeditor.js"></script>
		<script src="script.js"></script>
	</body>
</html>	
<script src="/ckeditor5/build/ckeditor.js"></script> 
<script>
    ClassicEditor
	.create( document.querySelector( '.editor' ), {
		// Editor configuration.
	} )
	.then( editor => {
		window.editor = editor;
	} )
	.catch( handleSampleError );

function handleSampleError( error ) {
	const issueUrl = 'https://github.com/ckeditor/ckeditor5/issues';

	const message = [
		'Oops, something went wrong!',
		`Please, report the following error on ${ issueUrl } with the build id "pwlg7t7st4r1-nohdljl880ze" and the error stack trace:`
	].join( '\n' );

	console.error( message );
	console.error( error );
}
</script> --}}


<!-- Agrega esta línea para incluir el script de CKEditor -->
{{-- <script src="https://cdn.ckeditor.com/ckeditor5/44.0.1/classic/ckeditor.js"></script> --}}

<!-- ... Tu código HTML existente ... -->

{{-- <div class="mb-3">
    <label for="markdown" class="form-label">Contenido del Tema</label>
    <div id="editor" class="editor"></div>
    <textarea class="form-control d-none" id="markdown" name="markdown" rows="10" cols="100"></textarea>
</div>

<!-- ... Tu código HTML existente ... -->

<script src="/ckeditor5/build/ckeditor.js"></script> 
<script>
    document.addEventListener("DOMContentLoaded", function () {
        ClassicEditor
            .create(document.querySelector('#editor'))
            .then(editor => {
                // Configuración adicional si es necesario
                console.log('Editor initialized:', editor);
            })
            .catch(error => {
                console.error('Error initializing editor:', error);
            });
    });
</script> --}}


{{-- <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Modal con CKEditor</title>
</head>
<body>

<!-- Botón para abrir el modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
    Abrir Modal
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editor CKEditor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Contenedor para el editor CKEditor -->
                <div id="editor"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <!-- Puedes agregar un botón para realizar alguna acción específica al cerrar el modal si es necesario -->
            </div>
        </div>
    </div>
</div>

<!-- Incluir las bibliotecas de Bootstrap y CKEditor -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="/ckeditor5/build/ckeditor.js"></script> 

<!-- Inicializar CKEditor en el modal -->
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .then(editor => {
            console.log('Editor initialized:', editor);
        })
        .catch(error => {
            console.error('Error initializing editor:', error);
        });
</script>

</body>
</html> --}}
{{-- <x-app-layout>
    <!-- Page Heading -->
    <br>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">lessons</li>
        </ol>
    </nav>
 



   
</x-app-layout> --}}
{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script> --}}

{{-- <button type="button" data-toggle="modal" data-target="#modalAddBrand">Launch modal</button> --}}
{{-- <button type="button" id="modalAddBrandButton">Launch modal</button>

<div class="modal fade" id="modalAddBrand" tabindex="-1" role="dialog" aria-labelledby="modalAddBrandLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h4 class="modal-title" id="modalAddBrandLabel">add</h4>

            </div>
            <div class="modal-body">
                <form>
                    <textarea name="editor1" id="editor1" rows="10" cols="80">This is my textarea to be replaced with CKEditor.</textarea>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button id="AddBrandButton" type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>

<script>
    CKEDITOR.replace('editor1');

$(document).ready(function(){

$.fn.modal.Constructor.prototype.enforceFocus = function () {
    modal_this = this
    $(document).on('focusin.modal', function (e) {
        if (modal_this.$element[0] !== e.target && !modal_this.$element.has(e.target).length
        // add whatever conditions you need here:
        &&
        !$(e.target.parentNode).hasClass('cke_dialog_ui_input_select') && !$(e.target.parentNode).hasClass('cke_dialog_ui_input_text')) {
            modal_this.$element.focus()
        }
    })
};
$('#modalAddBrandButton').on('click', function () {
            $('#modalAddBrand').modal('show');
        });

});


</script> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Modal with CKEditor</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<div class="modal fade" id="modalAddBrand" tabindex="-1" role="dialog" aria-labelledby="modalAddBrandLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="modalAddBrandLabel">Add brand</h4>
            </div>
            <div class="modal-body">
                <form>
                    <textarea name="editor1" id="editor1" rows="10" cols="80">This is my textarea to be replaced with CKEditor.</textarea>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button id="AddBrandButton" type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

<script>
    $(document).ready(function () {
        // Ensure CKEditor is initialized after the document is ready
        CKEDITOR.replace('editor1');
        
        // Custom script for focusing on the modal
        $.fn.modal.Constructor.prototype.enforceFocus = function () {
            var $modalElement = this.$element;
            $(document).on('focusin.modal', function (e) {
                var $parent = $(e.target.parentNode);
                if (
                    $modalElement[0] !== e.target &&
                    !$modalElement.has(e.target).length &&
                    !$parent.hasClass('cke_dialog_ui_input_select') &&
                    !$parent.hasClass('cke_dialog_ui_input_text')
                ) {
                    $modalElement.focus();
                }
            });
        };
    });
</script>

</body>
</html>


