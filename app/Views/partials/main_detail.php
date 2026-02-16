<div>
  <section id="features" class="section section-dark-feature">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="iron-heading-wrap mb-4 mb-lg-5">
            <div class="iron-heading d-inline-block position-relative">
              <h2 class="iron-title mb-0">
                <?= esc($content['features']['title'] ?? 'IronPDF for C++') ?>
              </h2>
              <span class="iron-badge">
                <img
                  src="/assets/images/coming-soon.png"
                  alt="Coming soon"
                  class="iron-badge-img"
                />
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <ul
            class="iron-feature-list d-flex flex-column flex-md-row justify-content-center align-items-center mb-0"
          >
            <?php if (!empty($content['features']['items']) && is_array($content['features']['items'])): ?>
              <?php foreach ($content['features']['items'] as $item): ?>
                <li class="iron-feature-item fw-light">
                  <span class="fw-bold p-2"> #</span><?= esc($item) ?>
                </li>
              <?php endforeach; ?>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section class="section section-darker">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12 col-xl-12 text-start text-white library-detail">
          <p class="mb-3 fw-light">
            The new <span class="mb-3 fw-medium">IronPDF library for C++</span> will enhance
            the C++ developer's tool set with robust PDF generation and
            conversion capabilities. Developers will be able to generate new
            PDFs from HTML content (from text or from URL), as well as to
            combine, split, extract, and modify content from existing PDFs.
          </p>
          <p class="mb-0 fw-light">
            <span class="mb-3 fw-medium">IronPDF for C++</span> will help developers create C++
            applications that can do all of these PDF processing tasks and
            more, with speed, precision, control, and excellence.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section  class="section section-why">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-xl-4 col-lg-12 text-xl-start text-lg-center">
            <div class="html-to-pdf">
              <img
                src="/assets/images/html-to-pdf.png"
                alt="IronSoftware logo"
                class="html-to-pdf-icon"
              />
              <div class="logo-shadow-html">
              </div>
              <div class="logo-shadow-pdf">
              </div>
            </div>
        </div>
        <div class="col-xl-8 col-lg-12">
          <h2 class="why-title text-wite content-title mb-3">
            <?= esc($content['why']['title_prefix'] ?? 'Why make a') ?>
            <span class="text-purple-200">
              <?= esc($content['why']['title_highlight'] ?? 'C++ PDF Library') ?>
            </span>
          </h2>
          <?php if (!empty($content['why']['paragraphs'][0])): ?>
            <p class="why-text text-white fw-light  mb-3">
              <?= esc($content['why']['paragraphs'][0]) ?>
            </p>
          <?php endif; ?>

          <?php if (!empty($content['why']['paragraphs'][1])): ?>
            <p class="why-text text-white fw-light  mb-0">
              <?= esc($content['why']['paragraphs'][1]) ?>
            </p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

  <section id="early-access" class="section section-dark-early-access">
    <div class="container">
      <div class="row mb-4">
        <div class="col-lg-12 col-xl-12 ">
          <h2 class="h1 content-title mb-3">
            <?= esc($content['early_access']['title_prefix'] ?? 'Early Access to') ?>
            <span class="text-purple-200">
              <?= esc($content['early_access']['title_highlight'] ?? 'C++ PDF Library') ?>
            </span>
          </h2>

          <?php if (!empty($content['early_access']['description'])): ?>
            <p class="text-white fw-light mb-0">
              <?= esc($content['early_access']['description']) ?>
            </p>
          <?php endif; ?>
        </div>
      </div>

      <div class="row g-4 justify-content-center early-access-row">
        <?php if (!empty($content['early_access']['products']) && is_array($content['early_access']['products'])): ?>
          <?php foreach ($content['early_access']['products'] as $index => $product): ?>
            <div class="col-md-10 col-lg-8 col-xl-4">
              <div
                class="early-access-card d-flex flex-column flex-md-row align-items-md-center"
              >
                <?php
                  $isReleased = ($product['status'] === "released");
                  $statusClass = $isReleased
                    ? 'chip-soft me-md-3 mb-2 mb-md-0 text-nowrap text-purple-800'
                    : 'early-access-pill text-purple-200 me-md-3 mb-2 mb-md-0 text-nowrap';
                  $defaultStatus = $isReleased ? '# Released' : '# Coming Soon';
                ?>
                <span class="<?= esc($statusClass) ?>">
                  <?= esc( $defaultStatus) ?>
                </span>
                <div class="text-md-start text-center text-purple-200">
                  <div class="early-access-product">
                    <span class="fw-medium"><?=esc($product['product_name_bold'])?></span><span class="fw-light"><?= esc($product['product_name_rest']) ?></span>
									</div>
                  <div class="early-access-language fw-light">
                    <?= esc($product['language']) ?>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
    </div>
  </section>
</div>
