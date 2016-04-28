// var app = angular.module('guessNum', [])
// // app.config(function($httpProvider) {
// // 	$httpProvider.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded; charset=utf-8'
// // })

// app.controller('compairNum', function ($scope, $http) {

// 	$scope.startGame = function () {
// 		$scope.showMe = true
// 		$http.get('/startGame').success(function (data) {
// 			console.log(data)
// 		})
// 	}
	
// 	$scope.compair = function () {
// 		$scope.showResult = true
// 		var config = {}
// 		config.method = 'post'
// 		config.url = '/play'
// 		config.headers = {}
// 		config.headers['Content-Type'] = 'application/x-www-form-urlencoded; charset=utf-8'
// 		config.data = 'data=' + $scope.myNum
// 		$http(config).success(function (data) {
// 			console.log(data)
// 			// $scope.computerNum = data.num
// 			$scope.result = data.message
			
// 		})
// 	}
// })

$(document).ready(function () {
	$('header').headroom()

	$('a.contains-sub').click(function () {
		if ($(this).siblings('ul').hasClass('open')) {
			$(this).siblings('ul').removeClass('open')
		} else {
			$(this).siblings('ul').addClass('open')
		}
	})

	$('#nav li a').click(function () {
		if ($(this).hasClass('contains-sub')) {
			return false
		} else {
			$('.submenu').removeClass('open')
			$('.menu-btn').removeClass('active')
			$('#toggle').prop('checked', false)
		}
	})

	$('.menu-btn').click(function () {
		$(this).hasClass('active') ? $(this).removeClass('active') : $(this).addClass('active')
	})
	$('#close label').click(function () {
		$('.menu-btn').hasClass('active') ? $('.menu-btn').removeClass('active') : $('.menu-btn').addClass('active')
	})

	$('.owl-carousel').owlCarousel({
	    loop:true,
	    margin:10,
	    autoplay: true,
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:3
	        },
	        1000:{
	            items:5
	        }
	    }
	})
})