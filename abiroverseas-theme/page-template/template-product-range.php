<?php
/**
 * Template Name: Product Range — Detailed Cards
 * Template Post Type: page
 * Searchable directory with material guidance and comparison tables.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header();

$ab_product_range = array(
    array( 'slug'=>'pp', 'name'=>'Polypropylene (PP)', 'image'=>'pellets-macro.jpg', 'alt'=>'Polymer resin pellets', 'terms'=>'pp polypropylene injection moulding extrusion packaging automotive household', 'points'=>array('Available grades and forms depend on the intended application.','Commonly considered for injection moulding and extrusion routes.','Confirm grade, colour, impact needs, and end-use requirements.'), 'compare'=>array('Common forms'=>'Pellets / granules','Processing focus'=>'Injection / extrusion','Compare with'=>'HDPE: density and application needs differ by grade.') ),
    array( 'slug'=>'hdpe', 'name'=>'High-Density Polyethylene (HDPE)', 'image'=>'virgin-vs-recycled.jpg', 'alt'=>'Polymer material representing HDPE', 'terms'=>'hdpe high density polyethylene blow moulding pipe containers crates extrusion injection', 'points'=>array('Consider the required stiffness, impact performance, and service conditions.','Commonly used across blow moulding, extrusion, and selected injection applications.','Confirm whether virgin, recycled, or reprocessed material is suitable.'), 'compare'=>array('Common forms'=>'Pellets / granules / compounds','Processing focus'=>'Blow moulding / extrusion','Compare with'=>'LDPE / LLDPE: typically chosen for different flexibility needs.') ),
    array( 'slug'=>'ldpe-lldpe', 'name'=>'LDPE / LLDPE', 'image'=>'pellets-macro.jpg', 'alt'=>'Polymer pellets for flexible polyethylene applications', 'terms'=>'ldpe lldpe low density linear low density polyethylene film flexible packaging extrusion', 'points'=>array('Useful starting families for flexible film and packaging enquiries.','Film grade selection depends on process conditions and target film performance.','Confirm film type, thickness range, sealing needs, and application.'), 'compare'=>array('Common forms'=>'Pellets / granules','Processing focus'=>'Film extrusion','Compare with'=>'HDPE: often selected where more flexibility is needed.') ),
    array( 'slug'=>'pvc', 'name'=>'Polyvinyl Chloride (PVC)', 'image'=>'virgin-vs-recycled.jpg', 'alt'=>'Polymer material for PVC applications', 'terms'=>'pvc polyvinyl chloride rigid flexible pipes profiles cable construction extrusion', 'points'=>array('Rigid and flexible formulations serve different application requirements.','Processing and additives depend on the formulation and target product.','Confirm formulation, regulatory needs, colour, and end-use environment.'), 'compare'=>array('Common forms'=>'Compound / granules','Processing focus'=>'Profile / pipe extrusion','Compare with'=>'PE: formulation and service requirements differ substantially.') ),
    array( 'slug'=>'pet', 'name'=>'Polyethylene Terephthalate (PET)', 'image'=>'pellets-macro.jpg', 'alt'=>'Polymer pellets for PET applications', 'terms'=>'pet polyethylene terephthalate packaging bottle sheet thermoforming injection', 'points'=>array('PET grade selection depends on packaging, sheet, or other end-use needs.','Moisture control and processing conditions can be important for many grades.','Confirm application, intrinsic viscosity where relevant, and documentation needs.'), 'compare'=>array('Common forms'=>'Resin / pellets','Processing focus'=>'Packaging / sheet routes','Compare with'=>'PP: clarity, barrier, and performance needs guide selection.') ),
    array( 'slug'=>'abs', 'name'=>'Acrylonitrile Butadiene Styrene (ABS)', 'image'=>'virgin-vs-recycled.jpg', 'alt'=>'Industrial polymer material representing ABS', 'terms'=>'abs acrylonitrile butadiene styrene engineering plastic impact surface finish injection moulding', 'points'=>array('Consider impact, surface finish, colour, and dimensional requirements.','Often considered for injection-moulded components and housings.','Confirm heat exposure, appearance requirements, and applicable standards.'), 'compare'=>array('Common forms'=>'Pellets / granules','Processing focus'=>'Injection moulding','Compare with'=>'PS / HIPS: toughness and finish requirements may differ.') ),
    array( 'slug'=>'ps-hips', 'name'=>'Polystyrene / HIPS', 'image'=>'pellets-macro.jpg', 'alt'=>'Polymer resin granules representing polystyrene', 'terms'=>'ps hips polystyrene high impact polystyrene thermoforming packaging injection', 'points'=>array('General-purpose PS and HIPS have different impact characteristics.','Applications may include packaging, formed parts, and selected moulded products.','Confirm impact needs, food-contact requirements where relevant, and finish.'), 'compare'=>array('Common forms'=>'Pellets / granules','Processing focus'=>'Injection / thermoforming','Compare with'=>'ABS: compare impact, appearance, and application requirements.') ),
    array( 'slug'=>'engineering-plastics', 'name'=>'Engineering Plastics', 'image'=>'virgin-vs-recycled.jpg', 'alt'=>'Industrial polymer material for engineering applications', 'terms'=>'engineering plastics nylon polyamide pc polycarbonate pom acetal performance polymers', 'points'=>array('Choose the polymer family around mechanical, thermal, and chemical demands.','Grade and reinforcement can significantly change performance and processing.','Confirm load, temperature, environment, tolerances, and applicable standards.'), 'compare'=>array('Common forms'=>'Resin / pellets / compounds','Processing focus'=>'Grade-dependent moulding / extrusion','Compare with'=>'Commodity polymers: selection follows the required performance envelope.') ),
    array( 'slug'=>'masterbatch-additives', 'name'=>'Masterbatch & Additives', 'image'=>'pellets-macro.jpg', 'alt'=>'Close-up of polymer pellets representing masterbatch', 'terms'=>'masterbatch colour additive concentrate pigment uv stabiliser processing aid', 'points'=>array('Colour and additive concentrates are selected for the base polymer and process.','Let-down ratio and compatibility must be confirmed for the intended formulation.','Share the carrier resin, target colour, dosage, and performance objective.'), 'compare'=>array('Common forms'=>'Concentrated pellets','Processing focus'=>'Compounding / extrusion','Compare with'=>'Pre-coloured resin: dosing and formulation flexibility differ.') ),
    array( 'slug'=>'recycled-polymers', 'name'=>'Recycled & Reprocessed Polymers', 'image'=>'virgin-vs-recycled.jpg', 'alt'=>'Virgin and recycled polymer material', 'terms'=>'recycled reprocessed PCR PIR post consumer post industrial polymer pellets', 'points'=>array('Material source, consistency, and traceability should be reviewed for each enquiry.','Properties may vary with feedstock, sorting, processing, and grade.','Confirm application limits, test data, documentation, and acceptance criteria.'), 'compare'=>array('Common forms'=>'Reprocessed pellets / granules','Processing focus'=>'Application and grade dependent','Compare with'=>'Virgin resin: source, consistency, and documentation need review.') ),
    array( 'slug'=>'industrial-compounds', 'name'=>'Industrial Polymer Compounds', 'image'=>'pellets-macro.jpg', 'alt'=>'Industrial polymer compounds and resin pellets', 'terms'=>'industrial compounds filled polymer reinforced compound custom formulation', 'points'=>array('Compounds can be formulated around specific processing or end-use needs.','Fillers, reinforcement, and additives affect weight, stiffness, and process behaviour.','Confirm composition, target properties, colour, and validation requirements.'), 'compare'=>array('Common forms'=>'Pellets / compounds','Processing focus'=>'Formulation dependent','Compare with'=>'Unfilled resin: additives and reinforcement alter the performance profile.') ),
    array( 'slug'=>'polymer-forms', 'name'=>'Polymer Forms & Supply', 'image'=>'virgin-vs-recycled.jpg', 'alt'=>'Polymer resin in material form', 'terms'=>'polymer forms pellets granules powder compound bulk bags packaging supply', 'points'=>array('Available forms and packing depend on the specific material and source.','Match form and packaging to handling, storage, and processing requirements.','Confirm quantity, pack size, destination, timing, and required documentation.'), 'compare'=>array('Common forms'=>'Pellets / granules / powder','Processing focus'=>'Material and equipment dependent','Compare with'=>'Compounds: formulation and intended processing need confirmation.') ),
);
?>
<main id="main-content" class="ab-products-page ab-product-range-page">
    <section class="ab-products-hero" aria-labelledby="ab-range-hero-title">
        <div class="ab-wrap ab-products-hero-grid">
            <div class="ab-products-hero-copy">
              
                <span class="ab-eyebrow">A closer look at material options</span>
                <h1 id="ab-range-hero-title">Find the right polymer for your process.</h1>
                <p>Review common forms, processing routes, and selection considerations across our material range. Final grade, availability, and specifications are confirmed against your enquiry.</p>
                <div class="ab-products-hero-proof"><span><i aria-hidden="true"></i> Material-first guidance</span><span><i aria-hidden="true"></i> Details verified before commitment</span></div>
            </div>
            <div class="ab-products-hero-art" role="img" aria-label="Close-up of polymer resin material">
                <img src="<?php echo esc_url( get_theme_file_uri( '/assets/img/virgin-vs-recycled.jpg' ) ); ?>" alt="Close-up of polymer resin material" width="900" height="650" fetchpriority="high">
                <span class="ab-products-art-tag">Grades · processing · fit</span>
                <div class="ab-products-art-caption"><span class="ab-products-caption-dot" aria-hidden="true"></span><span><small>Compare with context</small><strong>Start with your application and requirements.</strong></span></div>
                <span class="ab-products-art-orbit" aria-hidden="true"></span>
            </div>
        </div>
    </section>

    <section class="ab-products-catalog ab-section" aria-labelledby="ab-range-heading">
        <div class="ab-wrap">
            <div class="ab-products-section-head">
                <div><span class="ab-eyebrow">Material guide</span><h2 id="ab-range-heading">Explore the product range</h2><p>Use the search to narrow the directory. Compare common forms and processing considerations, then confirm the exact grade for your use case.</p></div>
                <span class="ab-products-total"><strong data-products-count><?php echo count( $ab_product_range ); ?></strong> materials</span>
            </div>
            <div class="ab-products-search-wrap">
                <label class="ab-products-search" for="ab-range-search"><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="10.8" cy="10.8" r="6.8"></circle><path d="m16 16 4.5 4.5"></path></svg><input id="ab-range-search" type="search" placeholder="Search materials, grades, processing or applications…" autocomplete="off" data-product-search aria-controls="ab-range-grid"><kbd>⌕</kbd></label>
                <p class="ab-products-search-hint">Results filter instantly as you type.</p>
            </div>
            <div class="ab-range-grid" id="ab-range-grid" data-product-grid>
                <?php foreach ( $ab_product_range as $index => $product ) : ?>
                    <article class="ab-range-card" id="<?php echo esc_attr( $product['slug'] ); ?>" data-product-card data-search="<?php echo esc_attr( $product['name'] . ' ' . $product['terms'] . ' ' . implode( ' ', $product['points'] ) ); ?>">
                        <div class="ab-range-card-image"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/img/' . $product['image'] ) ); ?>" alt="<?php echo esc_attr( $product['alt'] ); ?>" width="720" height="480" loading="lazy"><span class="ab-range-card-index"><?php echo esc_html( sprintf( '%02d', $index + 1 ) ); ?></span></div>
                        <div class="ab-range-card-body">
                            <h3><?php echo esc_html( $product['name'] ); ?></h3>
                            <ul class="ab-range-points"><?php foreach ( $product['points'] as $point ) : ?><li><?php echo esc_html( $point ); ?></li><?php endforeach; ?></ul>
                            <div class="ab-range-table-wrap"><table class="ab-range-table"><tbody><?php foreach ( $product['compare'] as $label => $value ) : ?><tr><th scope="row"><?php echo esc_html( $label ); ?></th><td><?php echo esc_html( $value ); ?></td></tr><?php endforeach; ?></tbody></table></div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
            <div class="ab-products-empty" data-products-empty hidden><strong>No matching materials found.</strong><span>Try an abbreviation such as PP, HDPE, PVC, or a processing term.</span></div>
            <p class="ab-products-live-status" data-products-status aria-live="polite" role="status"><?php echo count( $ab_product_range ); ?> materials shown</p>
            <p class="ab-products-disclaimer">All Products Are Dummy</p>
        </div>
    </section>
</main>
<?php get_footer(); ?>