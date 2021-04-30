@extends('layouts.gabarit')

@section('contenu_page')

<section class="amp-lightbox-carousel slider5 cid-spyCkUAYZ9" id="slider5-1">
	
	
	<amp-state id="selectedstUtwcKLC2">
		<script type="application/json">
				{
					"slide": 0
				}
			</script>
	</amp-state>
	<div class="container">
        
		<amp-carousel width="450" height="300" layout="responsive" type="slides" loop="" id="wizard-carouselstUtwcKLC2" on="slideChange:AMP.setState({selectedstUtwcKLC2: {slide: event.index}})" data-delay="3000">
			<div class="item slider-image mbr-flex">
				<div class="item-wrapper">
					<amp-img src="{{asset('assets/images/mbr-800x533.jpg')}}" layout="responsive" width="450.281425891182" height="300" alt="image" class="placeholder-loader lb-image">
						<span class="mbr-text mbr-fonts-style display-7"><p>Coolinfo&nbsp; LA solution informatique</p></span>
						<div placeholder="" class="placeholder">
                                <div class="mobirise-spinner">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
						
					</amp-img>
				</div>
			</div>
			<div class="item slider-image mbr-flex">
				<div class="item-wrapper">
					<amp-img src="assets/images/mbr-680x358.jpg" layout="responsive" width="569.8324022346369" height="300" alt="image" class="placeholder-loader lb-image">
						<span class="mbr-text mbr-fonts-style display-7">
							Coolinfo  LA solution informatique </span>
						<div placeholder="" class="placeholder">
                                <div class="mobirise-spinner">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
						
					</amp-img>
				</div>
			</div>
			<div class="item slider-image mbr-flex">
				<div class="item-wrapper">
					<amp-img src="{{asset('assets/images/mbr-1080x715.jpg')}}" layout="responsive" width="453.1468531468531" height="300" alt="image" class="placeholder-loader lb-image">
						<span class="mbr-text mbr-fonts-style display-7">
							Coolinfo  LA solution informatique</span>
						<div placeholder="" class="placeholder">
                                <div class="mobirise-spinner">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
						
					</amp-img>
				</div>
			</div>
		</amp-carousel>
		<div class="dots-wrapper mbr-row">
			<div class="dots">
				<span class="dot current" role="button" tabindex="0" on="tap:wizard-carouselstUtwcKLC2.goToSlide(index=0)" data-amp-bind-class="selectedstUtwcKLC2.slide == 0 ? &quot;current&quot; : &quot;&quot;"></span>
			</div>
			<div class="dots">
				<span class="dot" role="button" tabindex="1" on="tap:wizard-carouselstUtwcKLC2.goToSlide(index=1)" data-amp-bind-class="selectedstUtwcKLC2.slide == 1 ? &quot;current&quot; : &quot;&quot;"></span>
			</div>
			<div class="dots">
				<span class="dot" role="button" tabindex="2" on="tap:wizard-carouselstUtwcKLC2.goToSlide(index=2)" data-amp-bind-class="selectedstUtwcKLC2.slide == 2 ? &quot;current&quot; : &quot;&quot;"></span>
			</div>
		</div>
		
	</div>
</section>

<section class="features2 mbr-section cid-spKbbkB8Vf" id="features2-5">

    
    
    <div class="container">
        <div class="mbr-row mbr-jc-c">
            <div class="card mbr-col-sm-12 mbr-col-md-6 mbr-col-lg-3 md-pb">
                <div class="card-wrapper">
                    <div class="card-img">
                        <amp-img src="{{asset('assets/images/349600-icones-de-materiel-informatique-vectoriel-506x385.jpg')}}" layout="responsive" width="253" height="192.5" alt="Mobirise" class="mobirise-loader">
                            <div placeholder="" class="placeholder">
                                <div class="mobirise-spinner">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                            
                        </amp-img>
                    </div>
                    <div class="card-box mbr-p-5">
                        <h4 class="mbr-section-title mbr-fonts-style align-left mbr-bold mbr-pb-1 display-7">VENTE DE PIÈCES DÉTACHÉES</h4>
                        <p class="mbr-text mbr-fonts-style align-left mbr-pb-1 display-4">
                            Batterie, alimentation, dalle de portable, mémoire, carte mère, disque dur, pièces d’imprimante, carte wifi, boitier cpl, ….
                        </p>
                        <div class="mbr-section-btn align-left"><a class="btn btn-sm btn-warning-outline display-7" href="vente">En savoir plus</a></div>
                    </div>
                </div>
            </div>
            
            <div class="card mbr-col-sm-12 mbr-col-md-6 mbr-col-lg-3 md-pb">
                <div class="card-wrapper">
                    <div class="card-img">
                        <amp-img src="{{asset('assets/images/maintenance-1-506x370.png')}}" layout="responsive" height="227.5" width="252.9956896551724" alt="Mobirise" class="mobirise-loader">
                            <div placeholder="" class="placeholder">
                                <div class="mobirise-spinner">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                            
                        </amp-img>
                    </div>
                    <div class="card-box mbr-p-5">
                        <h4 class="mbr-section-title mbr-fonts-style align-left mbr-bold mbr-pb-1 display-7">INSTALLATION DE MATÉRIEL</h4>
                        <p class="mbr-text mbr-fonts-style align-left mbr-pb-1 display-4">
                            Simple évolution ou refonte complète de votre parc, nous installons et transférons vos logiciels, vos données, vos sauvegardes,…
                        </p>
                        <div class="mbr-section-btn align-left"><a class="btn btn-sm btn-warning-outline display-7" href="installation">
                                En savoir plus</a></div>
                    </div>
                </div>
            </div>

            <div class="card mbr-col-sm-12 mbr-col-md-6 mbr-col-lg-3">
                <div class="card-wrapper">
                    <div class="card-img">
                        <amp-img src="{{asset('assets/images/unnamed-506x417.png')}}" layout="responsive" height="208.5" width="253" alt="Mobirise" class="mobirise-loader">
                            <div placeholder="" class="placeholder">
                                <div class="mobirise-spinner">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                            
                        </amp-img>
                    </div>
                    <div class="card-box mbr-p-5">
                        <h4 class="mbr-section-title mbr-fonts-style align-left mbr-bold mbr-pb-1 display-7">SAUVEGARDE DE DONNÉES
<div><br></div></h4>
                        <p class="mbr-text mbr-fonts-style align-left mbr-pb-1 display-4">
                            Une solution chère n’est pas forcément plus efficace ! Nous avons des solutions pour planifier vos sauvegardes vers différents supports ou cloud.
                        </p>
                        <div class="mbr-section-btn align-left"><a class="btn btn-sm btn-warning-outline display-7" href="sauvegarde">
                                En savoir plus</a></div>
                    </div>
                </div>
            </div>

            <div class="card mbr-col-sm-12 mbr-col-md-6 mbr-col-lg-3 last-child">
                <div class="card-wrapper">
                    <div class="card-img">
                        <amp-img src="{{asset('assets/images/unnamed-50')}}6x380.jpg" layout="responsive" height="190" width="252.99999999999997" alt="Mobirise" class="mobirise-loader">
                            <div placeholder="" class="placeholder">
                                <div class="mobirise-spinner">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                            
                        </amp-img>
                    </div>
                    <div class="card-box mbr-p-5">
                        <h4 class="mbr-section-title mbr-fonts-style align-left mbr-bold mbr-pb-1 display-7">WIFI ET RESEAUX</h4>
                        <p class="mbr-text mbr-fonts-style align-left mbr-pb-1 display-4">
                            Tablettes, téléphones, ordinateurs, imprimantes, nous pouvons relier tous les objets connectés de votre environnement, à l’aide des dernières technologies.                        </p>
                        <div class="mbr-section-btn align-left"><a class="btn btn-sm btn-warning-outline display-7" href="wifi">
                                En savoir plus
                            </a></div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<section class="features2 mbr-section cid-spVvgA1LrS" id="features2-13">

    
    
    <div class="container">
        <div class="mbr-row mbr-jc-c">
            <div class="card mbr-col-sm-12 mbr-col-md-6 mbr-col-lg-3 md-pb">
                <div class="card-wrapper">
                    <div class="card-img">
                        <amp-img src="{{asset('assets/images/depannage-informatique-reparation-ordinateur-506x422.png')}}" layout="responsive" width="253" height="211" alt="Mobirise" class="mobirise-loader">
                            <div placeholder="" class="placeholder">
                                <div class="mobirise-spinner">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                            
                        </amp-img>
                    </div>
                    <div class="card-box mbr-p-5">
                        <h4 class="mbr-section-title mbr-fonts-style align-left mbr-bold mbr-pb-1 display-7">DÉPANNAGE INFORMATIQUE</h4>
                        <p class="mbr-text mbr-fonts-style align-left mbr-pb-1 display-4">
                            Portable, station de travail, serveur, imprimante, wifi, câblage, réseau, nous couvrons tous vos besoins.
                        </p>
                        <div class="mbr-section-btn align-left"><a class="btn btn-sm btn-warning-outline display-7" href="depannages">En savoir plus</a></div>
                    </div>
                </div>
            </div>
            
            <div class="card mbr-col-sm-12 mbr-col-md-6 mbr-col-lg-3 md-pb">
                <div class="card-wrapper">
                    <div class="card-img">
                        <amp-img src="{{asset('assets/images/installation-configuration-sauvegarde-automatique-260x241.jpg')}}" layout="responsive" height="234.5" width="252.9875518672199" alt="Mobirise" class="mobirise-loader">
                            <div placeholder="" class="placeholder">
                                <div class="mobirise-spinner">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                            
                        </amp-img>
                    </div>
                    <div class="card-box mbr-p-5">
                        <h4 class="mbr-section-title mbr-fonts-style align-left mbr-bold mbr-pb-1 display-7">RESTAURARTION DE DONNÉES</h4>
                        <p class="mbr-text mbr-fonts-style align-left mbr-pb-1 display-4">Vos données sont récupérables. Consultez-nous.
                        </p>
                        <div class="mbr-section-btn align-left"><a class="btn btn-sm btn-warning-outline display-7" href="sauvegarde">
                                En savoir plus</a></div>
                    </div>
                </div>
            </div>

            <div class="card mbr-col-sm-12 mbr-col-md-6 mbr-col-lg-3">
                <div class="card-wrapper">
                    <div class="card-img">
                        <amp-img src="{{asset('assets/images/reseau-308x242.jpg')}}" layout="responsive" height="198.775" width="252.98636363636365" alt="Mobirise" class="mobirise-loader">
                            <div placeholder="" class="placeholder">
                                <div class="mobirise-spinner">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                            
                        </amp-img>
                    </div>
                    <div class="card-box mbr-p-5">
                        <h4 class="mbr-section-title mbr-fonts-style align-left mbr-bold mbr-pb-1 display-7">CONFIGURATION SUR MESURE</h4>
                        <p class="mbr-text mbr-fonts-style align-left mbr-pb-1 display-4">
                            Vous êtes unique, votre usage de l’informatique aussi ! Nos configurations s’adapteront à vos besoins.
                        </p>
                        <div class="mbr-section-btn align-left"><a class="btn btn-sm btn-warning-outline display-7" href="configuration">
                                En savoir plus</a></div>
                    </div>
                </div>
            </div>

            <div class="card mbr-col-sm-12 mbr-col-md-6 mbr-col-lg-3 last-child">
                <div class="card-wrapper">
                    <div class="card-img">
                        <amp-img src="{{asset('assets/images/unnamed-506x417.png')}}" layout="responsive" height="208.5" width="253" alt="Mobirise" class="mobirise-loader">
                            <div placeholder="" class="placeholder">
                                <div class="mobirise-spinner">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                            
                        </amp-img>
                    </div>
                    <div class="card-box mbr-p-5">
                        <h4 class="mbr-section-title mbr-fonts-style align-left mbr-bold mbr-pb-1 display-7">PROJETS SPECIFIQUES</h4>
                        <p class="mbr-text mbr-fonts-style align-left mbr-pb-1 display-4">
                            Vidéosurveillance, alarme, contrôle d’accès, domotique, notre domaine d’intervention est vaste.
                        </p>
                        <div class="mbr-section-btn align-left"><a class="btn btn-sm btn-warning-outline display-7" href="configuration">
                                En savoir plus</a></div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<section class="mbr-section 04 cid-spKPr2EsZs" id="content5-9">

    

    <div class="container">
        <div class="mbr-row mbr-jc-c">
            <div class="mbr-section-btn mbr-col-md-12 mbr-col-sm-12 mbr-col-lg-8 align-center"><a class="btn btn-primary display-4" href="contacte">AIDE</a>
                <a class="btn btn-secondary display-4" href="contacte">NOUS CONTACTES</a></div>
        </div>
    </div>
</section>

@stop