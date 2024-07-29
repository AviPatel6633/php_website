<div class="ltn__form-box contact-form-box box-shadow white-bg">
    <h4 class="title-2">Get A Quote</h4>
    <form id="form1" class="form1" name="form1" action="<?php echo $base_url ?>/insert.php" method="post">
        <div class="row">
            <div class="col-md-6">
                <div class="input-item input-item-name ltn__custom-icon">
                    <input type="text" name="name" id='name1' placeholder="Enter your name">
                    <div id="errorBox1" class="error-lable"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="input-item input-item-phone ltn__custom-icon">
                    <input type="text" name="phone" id='phone1' placeholder="Enter phone number">
                    <div id="errorBox2" class="error-lable"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="input-item input-item-email ltn__custom-icon">
                    <input type="email" name="email" id='email1' placeholder="Enter email address">
                    <div id="errorBox3" class="error-lable"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="input-item input-item-website ltn__custom-icon">
                    <input type="text" name="zipcode" id='zipcode1' placeholder="Enter zipcode">
                    <div id="errorBox4" class="error-lable"></div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="input-item">
                    <select class="nice-select" name="menu_product" id="menu_product1">
                        <option value="---Select Product---">---Select Product---</option>
                        <option value="Waterproof Cloth Tape">Waterproof Cloth Tape</option>
                        <option value="Black Nylon Tape">Black Nylon Tape</option>
                        <option value="Pink Rayon Tape">Pink Rayon Tape</option>
                        <option value="Non-Waterproof Cloth Tape">Non-Waterproof Cloth Tape</option>
                        <option value="Double Side Cloth Tape">Double Side Cloth Tape</option>
                        <option value="Crepe Paper Masking Tape">Crepe Paper Masking Tape</option>
                        <option value="Silicon Sealant">Silicon Sealant</option>
                        <option value="Acrylic Latex">Acrylic Latex</option>
                        <option value="Super Latex">Super Latex</option>
                        <option value="Blue Seam Sealing Tape">Blue Seam Sealing Tape</option>
                        <option value="Seam sealing Machine">Seam sealing Machine</option>
                        <option value="other">other</option>
                    </select>
                </div>
                <div id="errorBox5" class="error-lable"></div>
            </div>

        </div>
        <div class="input-item input-item-textarea ltn__custom-icon">
            <textarea name="message" placeholder="Enter message"></textarea>

        </div>
        <div class="btn-wrapper mt-0">
            <button class="btn theme-btn-1 btn-effect-1 text-uppercase form1-btn" type="submit">get an free service</button>
        </div>
        <p class="form-messege mb-0 mt-20"></p>
    </form>
</div>