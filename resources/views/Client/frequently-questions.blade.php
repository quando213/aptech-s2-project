@extends('Client.layout.index')
@section('contact')
    <!-- ::::::  Start  Breadcrumb Section  ::::::  -->
    <div class="page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="page-breadcrumb__menu">
                        <li class="page-breadcrumb__nav"><a href="/">Home</a></li>
                        <li class="page-breadcrumb__nav active">Frequently Questions</li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- ::::::  End  Breadcrumb Section  ::::::  -->

    <!-- ::::::  Start  Main Container Section  ::::::  -->
    <main id="main-container" class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-content m-b-60 text-center">
                        <h5 class="section-content__title">Frequently Questions</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="faq-section ">
                        <div class="faq-top m-b-40">
                            <h5 class="faq__title font--bold m-b-15">Below are frequently asked questions, you may find the answer for yourself</h5>
                            <p class="text--gray">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id erat sagittis, faucibus metus malesuada, eleifend turpis. Mauris semper augue id nisl aliquet, a porta lectus mattis. Nulla at tortor augue. In eget enim diam. Donec gravida tortor sem, ac fermentum nibh rutrum sit amet. Nulla convallis mauris vitae congue consequat. Donec interdum nunc purus, vitae vulputate arcu fringilla quis. Vivamus iaculis euismod dui.</p>
                        </div>
                        <div class="faq__accordion accordian" id="faq__accordion">
                            <div class="accordian-item">
                                <div class="accordian-item-header">
                                    <h4>How do I find my Windows Product key?</h4>
                                </div>
                                <div class="accordian-item-body">
                                    <div class="accordian-item-body-content">
                                        <p>
                                            The product key is located inside the product packaging, on the
                                            receipt or confirmation page for a digital purchase or in a
                                            confirmation e-mail that shows you purchased Windows. If you
                                            purchased a digital copy from Microsoft Store, you can locate your
                                            product key in your Account under Digital Content.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordian-item">
                                <div class="accordian-item-header">
                                    <h4>I've downloaded an ISO file, now what?</h4>
                                </div>
                                <div class="accordian-item-body">
                                    <div class="accordian-item-body-content">
                                        <p>
                                            You can use the ISO file to create bootable media for installation
                                            or recovery. You can also install Windows on your current device
                                            by opening the ISO file, selecting the Setup and following the
                                            instructions.
                                        </p>
                                        <p>
                                            To create bootable media such as a bootable USB drive or DVD, you
                                            will need an ISO burning or mounting software. We recommend always
                                            using a blank USB or blank DVD because contents may be deleted
                                            when creating a bootable image.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordian-item">
                                <div class="accordian-item-header">
                                    <h4>
                                        What's the difference between 32-bit and 64-bit versions of Windows?
                                    </h4>
                                </div>
                                <div class="accordian-item-body">
                                    <div class="accordian-item-body-content">
                                        <p>
                                            The terms 32-bit and 64-bit refer to the way a computer's
                                            processor (also called a CPU) handles information. The 64-bit
                                            version of Windows handles large amounts of random access memory
                                            (RAM) more effectively than a 32-bit system. Not all devices can
                                            run the 64-bit versions of Windows.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordian-item">
                                <div class="accordian-item-header">
                                    <h4>How do I find my Windows Product key?</h4>
                                </div>
                                <div class="accordian-item-body">
                                    <div class="accordian-item-body-content">
                                        <p>
                                            The product key is located inside the product packaging, on the
                                            receipt or confirmation page for a digital purchase or in a
                                            confirmation e-mail that shows you purchased Windows. If you
                                            purchased a digital copy from Microsoft Store, you can locate your
                                            product key in your Account under Digital Content.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordian-item">
                                <div class="accordian-item-header">
                                    <h4>I've downloaded an ISO file, now what?</h4>
                                </div>
                                <div class="accordian-item-body">
                                    <div class="accordian-item-body-content">
                                        <p>
                                            You can use the ISO file to create bootable media for installation
                                            or recovery. You can also install Windows on your current device
                                            by opening the ISO file, selecting the Setup and following the
                                            instructions.
                                        </p>
                                        <p>
                                            To create bootable media such as a bootable USB drive or DVD, you
                                            will need an ISO burning or mounting software. We recommend always
                                            using a blank USB or blank DVD because contents may be deleted
                                            when creating a bootable image.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordian-item">
                                <div class="accordian-item-header">
                                    <h4>
                                        What's the difference between 32-bit and 64-bit versions of Windows?
                                    </h4>
                                </div>
                                <div class="accordian-item-body">
                                    <div class="accordian-item-body-content">
                                        <p>
                                            The terms 32-bit and 64-bit refer to the way a computer's
                                            processor (also called a CPU) handles information. The 64-bit
                                            version of Windows handles large amounts of random access memory
                                            (RAM) more effectively than a 32-bit system. Not all devices can
                                            run the 64-bit versions of Windows.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main> <!-- ::::::  End  Main Container Section  ::::::  -->
@endsection
@section('moddal')
    <!-- material-scrolltop button -->
    <button class="material-scrolltop" type="button"></button>

@endsection


