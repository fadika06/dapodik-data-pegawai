# dapodik-data-pegawai
Statistik rekapitulasi dapodik data pegawai tingkat provinsi


[![Join the chat at https://gitter.im/dapodik-data-pegawai/Lobby](https://badges.gitter.im/dapodik-data-pegawai/Lobby.svg)](https://gitter.im/dapodik-data-pegawai/Lobby?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/bantenprov/dapodik-data-pegawai/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/bantenprov/dapodik-data-pegawai/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/bantenprov/dapodik-data-pegawai/badges/build.png?b=master)](https://scrutinizer-ci.com/g/bantenprov/dapodik-data-pegawai/build-status/master)


## install via composer

- Development snapshot
```bash
$ composer require bantenprov/dapodik-data-pegawai:dev-master
```
- Latest release:

## download via github
```bash
$ git clone https://github.com/bantenprov/dapodik-data-pegawai.git
```
#### Edit `config/app.php` :
```php

'providers' => [

    /*
    * Laravel Framework Service Providers...
    */
    Illuminate\Auth\AuthServiceProvider::class,
    Illuminate\Broadcasting\BroadcastServiceProvider::class,
    Illuminate\Bus\BusServiceProvider::class,
    Illuminate\Cache\CacheServiceProvider::class,
    Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    Illuminate\Cookie\CookieServiceProvider::class,
    //....
    Bantenprov\DDPegawai\DDPegawaiServiceProvider::class,

```

#### Untuk publish component vue :

```bash
$ php artisan vendor:publish --tag=dd-pegawai-assets
$ php artisan vendor:publish --tag=dd-pegawai-public
```
#### Tambahkan route di dalam route : `resources/assets/js/routes.js` :

```javascript
path: '/dashboard',
component: layout('Default'),
children: [
  {
    path: '/dashboard',
    components: {
      main: resolve => require(['./components/views/DashboardHome.vue'], resolve),
      navbar: resolve => require(['./components/Navbar.vue'], resolve),
      sidebar: resolve => require(['./components/Sidebar.vue'], resolve)
    },
    meta: {
      title: "Dashboard"
    }
  },
  //== ...
  {
    path: '/dashboard/dd-pegawai',
    components: {
        main: resolve => require(['./components/views/bantenprov/dd-pegawai/DashboardDDPegawai.vue'], resolve),
        navbar: resolve => require(['./components/Navbar.vue'], resolve),
        sidebar: resolve => require(['./components/Sidebar.vue'], resolve)
    },
    meta: {
        title: "DD Pegawai"
    }
	}
```

```javascript
{
path: '/admin',
redirect: '/admin/dashboard',
component: resolve => require(['./AdminLayout.vue'], resolve),
children: [
//== ...
    {
			path: '/admin/dashboard/dd-pegawai',
			components: {
				main: resolve => require(['./components/bantenprov/dd-pegawai/DDPegawaiAdmin.view.vue'], resolve),
				navbar: resolve => require(['./components/Navbar.vue'], resolve),
				sidebar: resolve => require(['./components/Sidebar.vue'], resolve)
			},
			meta: {
				title: "DD Pegawai"
			}
		}
 //== ...   
  ]
},

```
#### Edit menu `resources/assets/js/menu.js`

```javascript
{
  name: 'Dashboard',
  icon: 'fa fa-dashboard',
  childType: 'collapse',
  childItem: [
        {
          name: 'Dashboard',
          link: '/dashboard',
          icon: 'fa fa-angle-double-right'
        },
        {
          name: 'Entity',
          link: '/dashboard/entity',
          icon: 'fa fa-angle-double-right'
        },
        //== ...
        {
          name: 'Angka partisipasi kasar',
          link: '/dashboard/ap-kasar',
          icon: 'fa fa-angle-double-right'
        }
  ]
},
//== ...        
      {
        name: 'Dapodik Data Pegawai',
        link: '/dashboard/dd-pegawai',
        icon: 'fa fa-angle-double-right'
      },
```

#### Tambahkan components `resources/assets/js/components.js` :

```javascript

//== DD pegawai

import DDPegawai from './components/bantenprov/dd-pegawai/DDPegawai.chart.vue';
Vue.component('echarts-dd-pegawai', DDPegawai);

import DDPegawaiKota from './components/bantenprov/dd-pegawai/DDPegawaiKota.chart.vue';
Vue.component('echarts-dd-pegawai-kota', DDPegawaiKota);

import DDPegawaiTahun from './components/bantenprov/dd-pegawai/DDPegawaiTahun.chart.vue';
Vue.component('echarts-dd-pegawai-tahun', DDPegawaiTahun);

import DDPegawaiAdminShow from './components/bantenprov/dd-pegawai/DDPegawaiAdmin.view.vue';
Vue.component('admin-view-dd-pegawai-tahun', DDPegawaiAdminShow);

//== Echarts DD Pegawai

import DDPegawaiBar01 from './components/views/bantenprov/dd-pegawai/DDPegawaiBar01.vue';
Vue.component('dd-pegawai-bar-01', DDPegawaiBar01);

import DDPegawaiBar02 from './components/views/bantenprov/dd-pegawai/DDPegawaiBar02.vue';
Vue.component('dd-pegawai-bar-02', DDPegawaiBar02);

//== mini bar charts
import DDPegawaiBar03 from './components/views/bantenprov/dd-pegawai/DDPegawaiBar03.vue';
Vue.component('dd-pegawai-bar-03', DDPegawaiBar03);

import DDPegawaiPie01 from './components/views/bantenprov/dd-pegawai/DDPegawaiPie01.vue';
Vue.component('dd-pegawai-pie-01', DDPegawaiPie01);

import DDPegawaiPie02 from './components/views/bantenprov/dd-pegawai/DDPegawaiPie02.vue';
Vue.component('dd-pegawai-pie-02', DDPegawaiPie02);

//== mini pie charts
import DDPegawaiPie03 from './components/views/bantenprov/dd-pegawai/DDPegawaiPie03.vue';
Vue.component('dd-pegawai-pie-03', DDPegawaiPie03);
```
