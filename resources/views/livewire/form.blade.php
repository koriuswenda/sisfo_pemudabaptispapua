<main class="h-full">
    <div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-4 sm:py-6">
        <div class="container mx-auto">
            <h3 class="mb-4">Add New Product</h3>
            <form action="#">
                <div class="form-container vertical">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                        <div class="lg:col-span-2">
                            <div class="card adaptable-card !border-b pb-6 py-4 rounded-br-none rounded-bl-none">
                                <div class="card-body">
                                    <h5>Basic Information</h5>
                                    <p class="mb-6">Section to config basic product information</p>
                                    <div class="form-item vertical">
                                        <label class="form-label mb-2">Product Name</label>
                                        <div>
                                            <input class="input" type="text" name="name" autocomplete="off"
                                                placeholder="Name" value="">
                                        </div>
                                    </div>
                                    <div class="form-item vertical">
                                        <label class="form-label mb-2">Code</label>
                                        <input class="input" type="text" name="productCode" autocomplete="off"
                                            placeholder="Code" value="">
                                    </div>
                                    <div class="form-item vertical">
                                        <label class="form-label mb-2">Description</label>
                                        <div class="rich-text-editor">
                                            <div id="description"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card adaptable-card !border-b pb-6 py-4 rounded-br-none rounded-bl-none">
                                <div class="card-body">
                                    <h5>Pricing</h5>
                                    <p class="mb-6">Section to config product sales information</p>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div class="col-span-1">
                                            <div class="form-item vertical">
                                                <label class="form-label mb-2">SKU</label>
                                                <div>
                                                    <input class="input" type="text" name="stock" autocomplete="off"
                                                        placeholder="Stock" value="0" inputmode="numeric">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-1">
                                            <div class="form-item vertical">
                                                <label class="form-label mb-2">Price</label>
                                                <div>
                                                    <span class="input-wrapper undefined">
                                                        <div class="input-suffix-start"> $</div>
                                                        <input class="input pl-8" type="text" name="price"
                                                            autocomplete="off" placeholder="Price" value="0"
                                                            inputmode="numeric">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div class="col-span-1">
                                            <div class="form-item vertical">
                                                <label class="form-label mb-2">Bulk Discount Price</label>
                                                <div>
                                                    <span class="input-wrapper undefined">
                                                        <div class="input-suffix-start"> $</div>
                                                        <input class="input pl-8" type="text" name="bulkDiscountPrice"
                                                            autocomplete="off" placeholder="Bulk Discount Price"
                                                            value="0" inputmode="numeric">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-1">
                                            <div class="form-item vertical">
                                                <label class="form-label mb-2">Tax Rate(%)</label>
                                                <div>
                                                    <input class="input" type="text" name="taxRate" autocomplete="off"
                                                        placeholder="Tax Rate" value="6" inputmode="numeric">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card adaptable-card pb-6 py-4 ">
                                <div class="card-body">
                                    <h5>Organizations</h5>
                                    <p class="mb-6">Section to config the product attribute</p>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div class="col-span-1">
                                            <div class="form-item vertical">
                                                <label class="form-label mb-2">Category</label>
                                                <div>
                                                    <select class="input">
                                                        <option selected>Select...</option>
                                                        <option value="Bags">Bags</option>
                                                        <option value="Cloths">Cloths</option>
                                                        <option value="Devices">Devices</option>
                                                        <option value="Shoes">Shoes</option>
                                                        <option value="Watches">Watches</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-1">
                                            <div class="form-item vertical">
                                                <label class="form-label mb-2">Tags</label>
                                                <div>
                                                    <select class="input">
                                                        <option selected>Select...</option>
                                                        <option value="Trend">Trend</option>
                                                        <option value="Unisex">Unisex</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div class="col-span-1">
                                            <div class="form-item vertical">
                                                <label class="form-label mb-2">Brand</label>
                                                <div>
                                                    <input class="input" type="text" name="brand" autocomplete="off"
                                                        placeholder="Brand">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-1">
                                            <div class="form-item vertical">
                                                <label class="form-label mb-2">Vendor</label>
                                                <div>
                                                    <input class="input" type="text" name="vendor" autocomplete="off"
                                                        placeholder="Vendor">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lg:col-span-1">
                            <div class="card adaptable-card mb-4">
                                <div class="card-body">
                                    <h5>Product Image</h5>
                                    <p class="mb-6">Add or change image for the product</p>
                                    <div class="form-item vertical">
                                        <label class="form-label"></label>
                                        <div>
                                            <div class="upload upload-draggable hover:border-primary-600">
                                                <input class="upload-input draggable" type="file" title="" value="">
                                                <div class="my-16 text-center">
                                                    <img src="img/others/upload.png" alt="" class="mx-auto">
                                                    <p class="font-semibold">
                                                        <span class="text-gray-800">Drop your image
                                                            here, or</span>
                                                        <span class="text-blue-500">browse</span>
                                                    </p>
                                                    <p class="mt-1 opacity-60">Support: jpeg, png</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="stickyFooter" class="sticky -bottom-1 -mx-8 px-8 flex items-center justify-end py-4">
                        <div class="md:flex items-center">
                            <button class="btn btn-default btn-sm ltr:mr-2 rtl:ml-2" type="button">Discard</button>
                            <button class="btn btn-solid btn-sm" type="submit">
                                <span class="flex items-center justify-center">
                                    <span class="text-lg">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                            viewBox="0 0 1024 1024" height="1em" width="1em"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M893.3 293.3L730.7 130.7c-7.5-7.5-16.7-13-26.7-16V112H144c-17.7 0-32 14.3-32 32v736c0 17.7 14.3 32 32 32h736c17.7 0 32-14.3 32-32V338.5c0-17-6.7-33.2-18.7-45.2zM384 184h256v104H384V184zm456 656H184V184h136v136c0 17.7 14.3 32 32 32h320c17.7 0 32-14.3 32-32V205.8l136 136V840zM512 442c-79.5 0-144 64.5-144 144s64.5 144 144 144 144-64.5 144-144-64.5-144-144-144zm0 224c-44.2 0-80-35.8-80-80s35.8-80 80-80 80 35.8 80 80-35.8 80-80 80z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span class="ltr:ml-1 rtl:mr-1">Save</span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>