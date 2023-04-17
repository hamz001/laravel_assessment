<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Dashboard')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <?php echo e(__("You're logged in!")); ?>

                </div>
            </div>

            <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-4 mb-12">
                <article>
                    <section class="mt-6 grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-x-6 gap-y-8">
                        <article class="relative w-full h-64 bg-cover bg-center group rounded-lg overflow-hidden shadow-lg hover:shadow-2xl  transition duration-300 ease-in-out"
                            style="background-image: url('');">
                            <div class="absolute inset-0 bg-black bg-opacity-50 group-hover:opacity-75 transition duration-300 ease-in-out"></div>
                            <div class="relative w-full h-full px-4 sm:px-6 lg:px-4 flex justify-center items-center">
                                <h3 class="text-center">
                                    <a class="text-white text-2xl font-bold text-center" href="/game/create">
                                        ➕ Add New Game
                                        <span class="absolute inset-0"></span>
                                    </a>
                                </h3>
                            </div>
                        </article>
                        <article class="relative w-full h-64 bg-cover bg-center group rounded-lg overflow-hidden shadow-lg hover:shadow-2xl  transition duration-300 ease-in-out"
                            style="background-image: url('');">
                            <div class="absolute inset-0 bg-black bg-opacity-50 group-hover:opacity-75 transition duration-300 ease-in-out"></div>
                            <div class="relative w-full h-full px-4 sm:px-6 lg:px-4 flex justify-center items-center">
                                <h3 class="text-center">
                                    <a class="text-white text-2xl font-bold text-center" href="/game/manage">
                                        ⚙️ Manage Games
                                        <span class="absolute inset-0"></span>
                                    </a>
                                </h3>
                            </div>
                        </article>
                        <article class="relative w-full h-64 bg-cover bg-center group rounded-lg overflow-hidden shadow-lg hover:shadow-2xl  transition duration-300 ease-in-out"
                            style="background-image: url('');">
                            <div class="absolute inset-0 bg-black bg-opacity-50 group-hover:opacity-75 transition duration-300 ease-in-out"></div>
                            <div class="relative w-full h-full px-4 sm:px-6 lg:px-4 flex justify-center items-center">
                                <h3 class="text-center">

                                <form class="text-white text-2xl font-bold text-center" method="POST" action="<?php echo e(route('logout')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <button type="submit">🚪 Logout
                                </form>
                                    <span class="absolute inset-0"></span>
                                </h3>
                            </div>
                        </article>
                    </section>
                </article>
            </section>

            
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH D:\laravel\Laravel-assessment\resources\views/dashboard.blade.php ENDPATH**/ ?>