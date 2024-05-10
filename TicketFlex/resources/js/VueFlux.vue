<template>
	<VueFlux :options="options" :rscs="rscs" :transitions="transitions">
	  <!-- Preloader -->
	  <template #preloader="preloaderProps">
		<FluxPreloader v-bind="preloaderProps" />
	  </template>
  
	  <!-- Controles -->
	  <template #controls="controlsProps">
		<FluxControls v-bind="controlsProps" />
	  </template>
  
	  <!-- Paginación -->
	  <template #pagination="paginationProps">
		<FluxPagination v-bind="paginationProps" />
	  </template>
	</VueFlux>
  </template>
  
  <script>
  import { reactive, shallowReactive } from 'vue';
  import {
	VueFlux,
	FluxPreloader,
	FluxControls,
	FluxPagination,
	Img,
	Swipe,
	Kenburn,
  } from 'vue-flux';
  
  export default {
	components: {
	  VueFlux,
	  FluxPreloader,
	  FluxControls,
	  FluxPagination,
	},
	setup() {
	  // Opciones del carrusel
	  const options = reactive({
		allowFullscreen: false,
		allowToSkipTransition: true,
		autohideTime: 2500,
		autoplay: false,
		bindKeys: false,
		delay: 5000,
		enableGestures: false,
		infinite: true,
		lazyLoad: true,
		lazyLoadAfter: 3,
	  });
  
	  // Recursos (imágenes)
	  const rscs = shallowReactive([
		new Img('/images/drops.jpg'),
		new Img('/images/entradas.webp'),
		new Img('/images/tienda.webp'),
	  ]);
  
	  // Transiciones disponibles
	  const transitions = shallowReactive([
	  Swipe,
	Kenburn,
	  ]);
  
	  return {
		options,
		rscs,
		transitions,
	  };
	},
  };
  </script>
  
  <style>
  /* Estilos personalizados para el carrusel si es necesario */
  </style>