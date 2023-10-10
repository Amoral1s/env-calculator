jQuery(document).ready(function ($) {
	
	let params = {
		company: {
			name: '',
			finance: Boolean,
			industry: ''
		}, 
		questions: {
			'Добыча нефти и газа': ['E1.1', 'E1.2', 'E1.3', 'E1.4', 'E1.5', 'E1.6', 'E1.8',
			'E2.1.6', 'E2.2.3', 'E2.3', 'E2.4', 'E2.5', 'E2.6.3', 'E2.7', 'E2.8', 'E2.9', 'E2.11',
			'E3.1', 'E3.2', 'E3.3', 'E3.4', 'E3.5', 'E3.6', 'E3.7', 'E3.9', 'E3.10',
			'E4.1', 'E4.2', 'E4.3', 'E4.5', 'E4.6', 'E4.7', 'E4.8', 'E4.9', 'E4.10', 'E4.11', 'E4.12', 'E4.13',
			'E5.1',
			'S1.1', 'S1.2', 'S1.3', 'S1.4',
			'S2.1', 'S2.2', 'S2.3', 'S2.4', 'S2.5', 'S2.7', 'S2.8', 'S2.9', 'S2.10', 'S2.11', 'S2.12', 'S2.13', 'S2.14', 'S2.15', 'S2.16', 'S2.17',
			'S3.1', 'S3.2', 'S3.3', 'S3.4', 'S3.5', 'S3.6',
			'S5.3',
			'S6.1', 'S6.2', 'S6.3', 'S6.4', 'S6.5', 'S6.6', 'S6.7',
			'G1.1', 'G1.2',
			'G2.1', 'G2.2', 'G2.3', 'G2.4', 'G2.5', 'G2.6', 'G2.7', 'G2.8', 'G2.9', 'G2.10',
			'G3.1', 'G3.2', 'G3.3',
			'G4.1', 'G4.2', 'G4.3',
			'G5.1.1', 'G5.2', 'G5.3', 'G5.4',
			'G61.1', 'G6.2', 'G6.3', 'G6.4', 'G6.5', 'G6.6', 'G6.7',
			'G71.1', 'G7.2', 'G7.3'
		],
		'Горная добыча': ['E1.1', 'E1.2', 'E1.3', 'E1.4', 'E1.5', 'E1.6', 'E1.8',
			'E2.1.6', 'E2.2.3', 'E2.3', 'E2.4', 'E2.5', 'E2.6.3', 'E2.7', 'E2.8', 'E2.9', 'E2.11', 'E2.12',
			'E3.1', 'E3.2', 'E3.3', 'E3.4', 'E3.5', 'E3.6', 'E3.7', 'E3.9', 'E3.10',
			'E4.1', 'E4.2', 'E4.3', 'E4.5', 'E4.6', 'E4.7', 'E4.8', 'E4.9', 'E4.10', 'E4.11', 'E4.12', 'E4.13',
			'E5.1',
			'S1.1', 'S1.2', 'S1.3', 'S1.4',
			'S2.1', 'S2.2', 'S2.3', 'S2.4', 'S2.5', 'S2.7', 'S2.8', 'S2.9', 'S2.10', 'S2.11', 'S2.12', 'S2.13', 'S2.14', 'S2.15', 'S2.16', 'S2.17',
			'S3.1', 'S3.2', 'S3.3', 'S3.4', 'S3.5', 'S3.6',
			'S5.3',
			'S6.1', 'S6.2', 'S6.3', 'S6.4', 'S6.5', 'S6.6', 'S6.7',
			'G1.1', 'G1.2',
			'G2.1', 'G2.2', 'G2.3', 'G2.4', 'G2.5', 'G2.6', 'G2.7', 'G2.8', 'G2.9', 'G2.10',
			'G3.1', 'G3.2', 'G3.3',
			'G4.1', 'G4.2', 'G4.3',
			'G5.1.1', 'G5.2', 'G5.3', 'G5.4',
			'G61.1', 'G6.2', 'G6.3', 'G6.4', 'G6.5', 'G6.6', 'G6.7',
			'G71.1', 'G7.2', 'G7.3'
		],
		'Черная металлургия': ['E1.1', 'E1.2', 'E1.3', 'E1.4', 'E1.5', 'E1.6', 'E1.8',
			'E2.1.6', 'E2.2.3', 'E2.3', 'E2.4', 'E2.5', 'E2.6.3', 'E2.7', 'E2.8', 'E2.9', 'E2.11', 'E2.12',
			'E3.1', 'E3.2', 'E3.3', 'E3.4', 'E3.5', 'E3.6', 'E3.7', 'E3.9', 'E3.10',
			'E4.1', 'E4.2', 'E4.3', 'E4.5', 'E4.6', 'E4.7', 'E4.8', 'E4.9', 'E4.10', 'E4.11', 'E4.12', 'E4.13',
			'E5.1',
			'S1.1', 'S1.2', 'S1.3', 'S1.4',
			'S2.1', 'S2.2', 'S2.3', 'S2.4', 'S2.5', 'S2.7', 'S2.8', 'S2.9', 'S2.10', 'S2.11', 'S2.12', 'S2.13', 'S2.14', 'S2.15', 'S2.16', 'S2.17',
			'S3.1', 'S3.2', 'S3.3', 'S3.4', 'S3.5', 'S3.6',
			'S5.3',
			'S6.1', 'S6.2', 'S6.3', 'S6.4', 'S6.5', 'S6.6', 'S6.7',
			'G1.1', 'G1.2',
			'G2.1', 'G2.2', 'G2.3', 'G2.4', 'G2.5', 'G2.6', 'G2.7', 'G2.8', 'G2.9', 'G2.10',
			'G3.1', 'G3.2', 'G3.3',
			'G4.1', 'G4.2', 'G4.3',
			'G5.1.1', 'G5.2', 'G5.3', 'G5.4',
			'G61.1', 'G6.2', 'G6.3', 'G6.4', 'G6.5', 'G6.6', 'G6.7',
			'G71.1', 'G7.2', 'G7.3'
		],
		'Цветная металлургия': ['E1.1', 'E1.2', 'E1.3', 'E1.4', 'E1.5', 'E1.6', 'E1.8',
			'E2.1.6', 'E2.2.3', 'E2.3', 'E2.4', 'E2.5', 'E2.6.3', 'E2.7', 'E2.8', 'E2.9', 'E2.11', 'E2.12',
			'E3.1', 'E3.2', 'E3.3', 'E3.4', 'E3.5', 'E3.6', 'E3.7', 'E3.9', 'E3.10',
			'E4.1', 'E4.2', 'E4.3', 'E4.5', 'E4.6', 'E4.7', 'E4.8', 'E4.9', 'E4.10', 'E4.11', 'E4.12', 'E4.13',
			'E5.1',
			'S1.1', 'S1.2', 'S1.3', 'S1.4',
			'S2.1', 'S2.2', 'S2.3', 'S2.4', 'S2.5', 'S2.7', 'S2.8', 'S2.9', 'S2.10', 'S2.11', 'S2.12', 'S2.13', 'S2.14', 'S2.15', 'S2.16', 'S2.17',
			'S3.1', 'S3.2', 'S3.3', 'S3.4', 'S3.5', 'S3.6',
			'S5.3',
			'S6.1', 'S6.2', 'S6.3', 'S6.4', 'S6.5', 'S6.6', 'S6.7',
			'G1.1', 'G1.2',
			'G2.1', 'G2.2', 'G2.3', 'G2.4', 'G2.5', 'G2.6', 'G2.7', 'G2.8', 'G2.9', 'G2.10',
			'G3.1', 'G3.2', 'G3.3',
			'G4.1', 'G4.2', 'G4.3',
			'G5.1.1', 'G5.2', 'G5.3', 'G5.4',
			'G61.1', 'G6.2', 'G6.3', 'G6.4', 'G6.5', 'G6.6', 'G6.7',
			'G71.1', 'G7.2', 'G7.3'
		],
		'Электроэнергетика и сети': ['E1.1', 'E1.2', 'E1.3', 'E1.4', 'E1.5', 'E1.6', 'E1.8',
			'E2.1.6', 'E2.2.3', 'E2.3', 'E2.4', 'E2.5', 'E2.6.3', 'E2.7', 'E2.8', 'E2.9', 'E2.11', 'E2.12',
			'E3.1', 'E3.2', 'E3.3', 'E3.4', 'E3.5', 'E3.6', 'E3.7', 'E3.10',
			'E4.1', 'E4.2', 'E4.3', 'E4.5', 'E4.6', 'E4.7', 'E4.8', 'E4.9', 'E4.10', 'E4.11', 'E4.12', 'E4.13',
			'E5.1',
			'S1.1', 'S1.2', 'S1.3', 'S1.4',
			'S2.1', 'S2.2', 'S2.3', 'S2.4', 'S2.5', 'S2.7', 'S2.8', 'S2.9', 'S2.10', 'S2.11', 'S2.12', 'S2.13', 'S2.14', 'S2.15', 'S2.16', 'S2.17',
			'S3.1', 'S3.2', 'S3.3', 'S3.4', 'S3.5', 'S3.6',
			'S5.3',
			'S6.1', 'S6.2', 'S6.3', 'S6.4', 'S6.5', 'S6.6', 'S6.7', 'S6.8',
			'G1.1', 'G1.2',
			'G2.1', 'G2.2', 'G2.3', 'G2.4', 'G2.5', 'G2.6', 'G2.7', 'G2.8', 'G2.9', 'G2.10',
			'G3.1', 'G3.2', 'G3.3',
			'G4.1', 'G4.2', 'G4.3',
			'G5.1.1', 'G5.2', 'G5.3', 'G5.4',
			'G61.1', 'G6.2', 'G6.3', 'G6.4', 'G6.5', 'G6.6', 'G6.7',
			'G71.1', 'G7.2', 'G7.3'
		],
		'Химическая промышленность': ['E1.1', 'E1.2', 'E1.3', 'E1.4', 'E1.5', 'E1.6', 'E1.8',
			'E2.1.6', 'E2.2.3', 'E2.3', 'E2.4', 'E2.5', 'E2.6.3', 'E2.7', 'E2.8', 'E2.9', 'E2.11', 'E2.12',
			'E3.1', 'E3.2', 'E3.3', 'E3.4', 'E3.5', 'E3.6', 'E3.7', 'E3.9', 'E3.10',
			'E4.1', 'E4.2', 'E4.3', 'E4.5', 'E4.6', 'E4.7', 'E4.8', 'E4.9', 'E4.10', 'E4.11', 'E4.12', 'E4.13',
			'E5.1',
			'S1.1', 'S1.2', 'S1.3', 'S1.4',
			'S2.1', 'S2.2', 'S2.3', 'S2.4', 'S2.5', 'S2.7', 'S2.8', 'S2.9', 'S2.10', 'S2.11', 'S2.12', 'S2.13', 'S2.14', 'S2.15', 'S2.16', 'S2.17',
			'S3.1', 'S3.2', 'S3.3', 'S3.4', 'S3.5', 'S3.6',
			'S5.3',
			'S6.1', 'S6.2', 'S6.3', 'S6.4', 'S6.5', 'S6.6', 'S6.7',
			'G1.1', 'G1.2',
			'G2.1', 'G2.2', 'G2.3', 'G2.4', 'G2.5', 'G2.6', 'G2.7', 'G2.8', 'G2.9', 'G2.10',
			'G3.1', 'G3.2', 'G3.3',
			'G4.1', 'G4.2', 'G4.3',
			'G5.1.1', 'G5.2', 'G5.3', 'G5.4',
			'G61.1', 'G6.2', 'G6.3', 'G6.4', 'G6.5', 'G6.6', 'G6.7',
			'G71.1', 'G7.2', 'G7.3'
		],
		'Лесная промышленность и деревообработка': ['E1.1', 'E1.2', 'E1.3', 'E1.4', 'E1.5', 'E1.6', 'E1.8',
			'E2.1.6', 'E2.2.3', 'E2.3', 'E2.4', 'E2.5', 'E2.6.3', 'E2.7', 'E2.8', 'E2.9', 'E2.11', 'E2.12',
			'E3.1', 'E3.2', 'E3.3', 'E3.4', 'E3.5', 'E3.6', 'E3.7', 'E3.9',
			'E4.1', 'E4.2', 'E4.3', 'E4.5', 'E4.6', 'E4.7', 'E4.8', 'E4.9', 'E4.10', 'E4.11', 'E4.12', 'E4.13',
			'E5.1',
			'S1.1', 'S1.2', 'S1.3', 'S1.4',
			'S2.1', 'S2.2', 'S2.3', 'S2.4', 'S2.5', 'S2.7', 'S2.8', 'S2.9', 'S2.10', 'S2.11', 'S2.12', 'S2.13', 'S2.14', 'S2.15', 'S2.16', 'S2.17',
			'S3.1', 'S3.2', 'S3.3', 'S3.4', 'S3.5', 'S3.6',
			'S5.3',
			'S6.1', 'S6.2', 'S6.3', 'S6.4', 'S6.5', 'S6.6', 'S6.7',
			'G1.1', 'G1.2',
			'G2.1', 'G2.2', 'G2.3', 'G2.4', 'G2.5', 'G2.6', 'G2.7', 'G2.8', 'G2.9', 'G2.10',
			'G3.1', 'G3.2', 'G3.3',
			'G4.1', 'G4.2', 'G4.3',
			'G5.1.1', 'G5.2', 'G5.3', 'G5.4',
			'G61.1', 'G6.2', 'G6.3', 'G6.4', 'G6.5', 'G6.6', 'G6.7',
			'G71.1', 'G7.2', 'G7.3'
		],
		'Прочая промышленность': ['E1.1', 'E1.2', 'E1.3', 'E1.4', 'E1.5', 'E1.6', 'E1.8',
			'E2.1.6', 'E2.2.3', 'E2.3', 'E2.4', 'E2.5', 'E2.6.3', 'E2.7', 'E2.8', 'E2.9', 'E2.11', 'E2.12',
			'E3.1', 'E3.2', 'E3.3', 'E3.4', 'E3.5', 'E3.6', 'E3.7', 'E3.9', 'E3.10',
			'E4.1', 'E4.2', 'E4.3', 'E4.5', 'E4.6', 'E4.7', 'E4.8', 'E4.9', 'E4.10', 'E4.11', 'E4.12', 'E4.13',
			'E5.1',
			'S1.1', 'S1.2', 'S1.3', 'S1.4',
			'S2.1', 'S2.2', 'S2.3', 'S2.4', 'S2.5', 'S2.7', 'S2.8', 'S2.9', 'S2.10', 'S2.11', 'S2.12', 'S2.13', 'S2.14', 'S2.15', 'S2.16', 'S2.17',
			'S3.1', 'S3.2', 'S3.3', 'S3.4', 'S3.5', 'S3.6',
			'S5.3',
			'S6.1', 'S6.2', 'S6.3', 'S6.4', 'S6.5', 'S6.6', 'S6.7',
			'G1.1', 'G1.2',
			'G2.1', 'G2.2', 'G2.3', 'G2.4', 'G2.5', 'G2.6', 'G2.7', 'G2.8', 'G2.9', 'G2.10',
			'G3.1', 'G3.2', 'G3.3',
			'G4.1', 'G4.2', 'G4.3',
			'G5.1.1', 'G5.2', 'G5.3', 'G5.4',
			'G61.1', 'G6.2', 'G6.3', 'G6.4', 'G6.5', 'G6.6', 'G6.7',
			'G71.1', 'G7.2', 'G7.3'
		],
		'Пассажирский транспорт': ['E1.1', 'E1.2', 'E1.3', 'E1.4', 'E1.5', 'E1.6', 'E1.8',
			'E2.1.6', 'E2.2.3', 'E2.3', 'E2.6.3', 'E2.7', 'E2.8', 'E2.9', 'E2.10',
			'E3.1', 'E3.2', 'E3.3', 'E3.4', 'E3.5', 'E3.6', 'E3.7', 'E3.10',
			'E4.1', 'E4.2', 'E4.3', 'E4.5', 'E4.6', 'E4.7', 'E4.8', 'E4.9', 'E4.10', 'E4.11', 'E4.12',
			'E5.1',
			'S1.1', 'S1.2', 'S1.3', 'S1.4',
			'S2.1', 'S2.2', 'S2.3', 'S2.4', 'S2.5', 'S2.7', 'S2.8', 'S2.9', 'S2.10', 'S2.11', 'S2.12', 'S2.13', 'S2.14', 'S2.15', 'S2.16', 'S2.17',
			'S3.1', 'S3.2', 'S3.3', 'S3.4', 'S3.5', 'S3.6',
			'S4.1.1', 'S4.2', 'S4.3',
			'S5.3',
			'S6.1', 'S6.2', 'S6.3', 'S6.4', 'S6.5', 'S6.6', 'S6.7', 'S6.8',
			'G1.1', 'G1.2',
			'G2.1', 'G2.2', 'G2.3', 'G2.4', 'G2.5', 'G2.6', 'G2.7', 'G2.8', 'G2.9', 'G2.10',
			'G3.1', 'G3.2', 'G3.3',
			'G4.1', 'G4.2', 'G4.3',
			'G5.1.1', 'G5.2', 'G5.3', 'G5.4',
			'G61.1', 'G6.2', 'G6.3', 'G6.4', 'G6.5', 'G6.6', 'G6.7',
			'G71.1', 'G7.2', 'G7.3'
		],
		'Грузовой транспорт и логистика': ['E1.1', 'E1.2', 'E1.3', 'E1.4', 'E1.5', 'E1.6', 'E1.8',
			'E2.1.6', 'E2.2.3', 'E2.3', 'E2.6.3', 'E2.7', 'E2.8', 'E2.9', 'E2.10',
			'E3.1', 'E3.2', 'E3.3', 'E3.4', 'E3.5', 'E3.6', 'E3.7',
			'E4.1', 'E4.2', 'E4.3', 'E4.5', 'E4.6', 'E4.7', 'E4.8', 'E4.9', 'E4.10', 'E4.11', 'E4.12',
			'E5.1',
			'S1.1', 'S1.2', 'S1.3', 'S1.4',
			'S2.1', 'S2.2', 'S2.3', 'S2.4', 'S2.5', 'S2.7', 'S2.8', 'S2.9', 'S2.10', 'S2.11', 'S2.12', 'S2.13', 'S2.14', 'S2.15', 'S2.16', 'S2.17',
			'S3.1', 'S3.2', 'S3.3', 'S3.4', 'S3.5', 'S3.6',
			'S4.3',
			'S5.3',
			'S6.1', 'S6.2', 'S6.3', 'S6.4', 'S6.5', 'S6.6', 'S6.7',
			'G1.1', 'G1.2',
			'G2.1', 'G2.2', 'G2.3', 'G2.4', 'G2.5', 'G2.6', 'G2.7', 'G2.8', 'G2.9', 'G2.10',
			'G3.1', 'G3.2', 'G3.3',
			'G4.1', 'G4.2', 'G4.3',
			'G5.1.1', 'G5.2', 'G5.3', 'G5.4',
			'G61.1', 'G6.2', 'G6.3', 'G6.4', 'G6.5', 'G6.6', 'G6.7',
			'G71.1', 'G7.2', 'G7.3'
		],
		'Сельское хозяйство': ['E1.1', 'E1.2', 'E1.3', 'E1.4', 'E1.5', 'E1.6', 'E1.8',
			'E2.1.6', 'E2.2.3', 'E2.3', 'E2.4', 'E2.5', 'E2.6.3', 'E2.7', 'E2.8', 'E2.9', 'E2.11',
			'E3.1', 'E3.2', 'E3.3', 'E3.4', 'E3.5', 'E3.6', 'E3.7',
			'E4.1', 'E4.2', 'E4.3', 'E4.5', 'E4.6', 'E4.7', 'E4.8', 'E4.9', 'E4.10', 'E4.11', 'E4.12', 'E4.13',
			'E5.1',
			'S1.1', 'S1.2', 'S1.3', 'S1.4',
			'S2.1', 'S2.2', 'S2.3', 'S2.4', 'S2.5', 'S2.7', 'S2.8', 'S2.9', 'S2.10', 'S2.11', 'S2.12', 'S2.13', 'S2.14', 'S2.15', 'S2.16', 'S2.17',
			'S3.1', 'S3.2', 'S3.3', 'S3.4', 'S3.5', 'S3.6',
			'S4.1.1', 'S4.2',
			'S5.3',
			'S6.1', 'S6.2', 'S6.3', 'S6.4', 'S6.5', 'S6.6', 'S6.7',
			'G1.1', 'G1.2',
			'G2.1', 'G2.2', 'G2.3', 'G2.4', 'G2.5', 'G2.6', 'G2.7', 'G2.8', 'G2.9', 'G2.10',
			'G3.1', 'G3.2', 'G3.3',
			'G4.1', 'G4.2', 'G4.3',
			'G5.1.1', 'G5.2', 'G5.3', 'G5.4',
			'G61.1', 'G6.2', 'G6.3', 'G6.4', 'G6.5', 'G6.6', 'G6.7',
			'G71.1', 'G7.2', 'G7.3'
		],
		'Потребительский сектор': ['E1.1', 'E1.2', 'E1.3', 'E1.4', 'E1.5', 'E1.6', 'E1.8',
			'E2.1.6', 'E2.2.3', 'E2.6.3', 'E2.7', 'E2.8', 'E2.10',
			'E3.1', 'E3.2', 'E3.3', 'E3.4', 'E3.5', 'E3.6', 'E3.7', 'E3.9', 'E3.10',
			'E4.1', 'E4.2', 'E4.3', 'E4.5', 'E4.6', 'E4.7', 'E4.8', 'E4.9', 'E4.10', 'E4.11', 'E4.12', 'E4.13',
			'E5.1',
			'S1.1', 'S1.2', 'S1.3', 'S1.4',
			'S2.1', 'S2.2', 'S2.3', 'S2.4', 'S2.5', 'S2.7', 'S2.8', 'S2.9', 'S2.10', 'S2.11', 'S2.12', 'S2.13', 'S2.14', 'S2.15', 'S2.16', 'S2.17',
			'S3.1', 'S3.2', 'S3.3', 'S3.4', 'S3.5', 'S3.6',
			'S4.1.1', 'S4.2', 'S4.3', 'S.4.5',
			'S5.3',
			'S6.1', 'S6.2', 'S6.3', 'S6.4', 'S6.5', 'S6.6', 'S6.7', 'S6.8',
			'G1.1', 'G1.2',
			'G2.1', 'G2.2', 'G2.3', 'G2.4', 'G2.5', 'G2.6', 'G2.7', 'G2.8', 'G2.9', 'G2.10',
			'G3.1', 'G3.2', 'G3.3',
			'G4.1', 'G4.2', 'G4.3',
			'G5.1.1', 'G5.2', 'G5.3', 'G5.4',
			'G61.1', 'G6.2', 'G6.3', 'G6.4', 'G6.5', 'G6.6', 'G6.7',
			'G71.1', 'G7.2', 'G7.3'
		],
		'Оптовая торговля': ['E1.1', 'E1.2', 'E1.3', 'E1.4', 'E1.5', 'E1.6', 'E1.8',
			'E2.1.6', 'E2.2.3', 'E2.6.3', 'E2.7', 'E2.8', 'E2.10',
			'E3.1', 'E3.2', 'E3.3', 'E3.4', 'E3.5', 'E3.6', 'E3.7', 'E3.9', 'E3.10',
			'E4.1', 'E4.2', 'E4.3', 'E4.5', 'E4.6', 'E4.7', 'E4.8', 'E4.9', 'E4.10',
			'E5.1',
			'S1.1', 'S1.2', 'S1.3', 'S1.4',
			'S2.1', 'S2.2', 'S2.3', 'S2.4', 'S2.5', 'S2.7', 'S2.8', 'S2.9', 'S2.10', 'S2.11', 'S2.12', 'S2.13', 'S2.14', 'S2.15', 'S2.16', 'S2.17',
			'S3.1', 'S3.2', 'S3.3', 'S3.4', 'S3.5', 'S3.6',
			'S4.1.1', 'S4.2', 'S4.3',
			'S5.3',
			'S6.1', 'S6.2', 'S6.3', 'S6.4', 'S6.5', 'S6.6', 'S6.7',
			'G1.1', 'G1.2',
			'G2.1', 'G2.2', 'G2.3', 'G2.4', 'G2.5', 'G2.6', 'G2.7', 'G2.8', 'G2.9', 'G2.10',
			'G3.1', 'G3.2', 'G3.3',
			'G4.1', 'G4.2', 'G4.3',
			'G5.1.1', 'G5.2', 'G5.3', 'G5.4',
			'G61.1', 'G6.2', 'G6.3', 'G6.4', 'G6.5', 'G6.6', 'G6.7',
			'G71.1', 'G7.2', 'G7.3'
		],
		'Строительство зданий': ['E1.1', 'E1.2', 'E1.3', 'E1.4', 'E1.5', 'E1.6', 'E1.8',
			'E2.1.1', 'E2.1.4', 'E2.1.5', 'E2.1.6', 'E2.2.3', 'E2.3', 'E2.4', 'E2.5', 'E2.6.3', 'E2.7', 'E2.8', 'E2.9', 'E2.11',
			'E3.1', 'E3.2', 'E3.3', 'E3.4', 'E3.5', 'E3.6', 'E3.7', 'E3.8',
			'E4.1', 'E4.2', 'E4.3', 'E4.5', 'E4.6', 'E4.7', 'E4.8', 'E4.9', 'E4.10', 'E4.11', 'E4.12',
			'E5.1',
			'S1.1', 'S1.2', 'S1.3', 'S1.4',
			'S2.1', 'S2.2', 'S2.3', 'S2.4', 'S2.5', 'S2.7', 'S2.8', 'S2.9', 'S2.10', 'S2.11', 'S2.12', 'S2.13', 'S2.14', 'S2.15', 'S2.16', 'S2.17',
			'S3.1', 'S3.2', 'S3.3', 'S3.4', 'S3.5', 'S3.6',
			'S4.1.1', 'S4.2', 'S4.5',
			'S5.3',
			'S6.1', 'S6.2', 'S6.3', 'S6.4', 'S6.5', 'S6.6', 'S6.7',
			'G1.1', 'G1.2',
			'G2.1', 'G2.2', 'G2.3', 'G2.4', 'G2.5', 'G2.6', 'G2.7', 'G2.8', 'G2.9', 'G2.10',
			'G3.1', 'G3.2', 'G3.3',
			'G4.1', 'G4.2', 'G4.3',
			'G5.1.1', 'G5.2', 'G5.3', 'G5.4',
			'G61.1', 'G6.2', 'G6.3', 'G6.4', 'G6.5', 'G6.6', 'G6.7',
			'G71.1', 'G7.2', 'G7.3'
		],
		'Строительство прочих сооружений': ['E1.1', 'E1.2', 'E1.3', 'E1.4', 'E1.5', 'E1.6', 'E1.7', 'E1.8',
			'E2.1.1', 'E2.1.4', 'E2.1.5', 'E2.1.6', 'E2.2.3', 'E2.3', 'E2.4', 'E2.5', 'E2.6.3', 'E2.7', 'E2.8', 'E2.9', 'E2.11',
			'E3.1', 'E3.2', 'E3.3', 'E3.4', 'E3.5', 'E3.6', 'E3.7', 'E3.8',
			'E4.1', 'E4.2', 'E4.3', 'E4.5', 'E4.6', 'E4.7', 'E4.8', 'E4.9', 'E4.10', 'E4.11', 'E4.12', 'E4.13',
			'E5.1',
			'S1.1', 'S1.2', 'S1.3', 'S1.4',
			'S2.1', 'S2.2', 'S2.3', 'S2.4', 'S2.5', 'S2.7', 'S2.8', 'S2.9', 'S2.10', 'S2.11', 'S2.12', 'S2.13', 'S2.14', 'S2.15', 'S2.16', 'S2.17',
			'S3.1', 'S3.2', 'S3.3', 'S3.4', 'S3.5', 'S3.6',
			'S4.1.1', 'S4.2',
			'S5.3',
			'S6.1', 'S6.2', 'S6.3', 'S6.4', 'S6.5', 'S6.6', 'S6.7',
			'G1.1', 'G1.2',
			'G2.1', 'G2.2', 'G2.3', 'G2.4', 'G2.5', 'G2.6', 'G2.7', 'G2.8', 'G2.9', 'G2.10',
			'G3.1', 'G3.2', 'G3.3',
			'G4.1', 'G4.2', 'G4.3',
			'G5.1.1', 'G5.2', 'G5.3', 'G5.4',
			'G61.1', 'G6.2', 'G6.3', 'G6.4', 'G6.5', 'G6.6', 'G6.7',
			'G71.1', 'G7.2', 'G7.3'
		],
		'Нефинансовые услуги': ['E1.1', 'E1.2', 'E1.3', 'E1.4', 'E1.5', 'E1.6', 'E1.8',
			'E2.2.3', 'E2.6.3', 'E2.7', 'E2.8', 'E2.10', 'E2.11',
			'E3.1', 'E3.2', 'E3.3', 'E3.4', 'E3.5', 'E3.6', 'E3.7',
			'E4.1', 'E4.2', 'E4.3', 'E4.5', 'E4.6', 'E4.7', 'E4.8', 'E4.9', 'E4.10', 'E4.11', 'E4.12', 'E4.13',
			'E5.1',
			'S1.1', 'S1.2', 'S1.3', 'S1.4',
			'S2.1', 'S2.2', 'S2.3', 'S2.4', 'S2.5', 'S2.7', 'S2.8', 'S2.9', 'S2.10', 'S2.11', 'S2.13', 'S2.14', 'S2.15', 'S2.16', 'S2.17',
			'S3.1', 'S3.2', 'S3.3', 'S3.4', 'S3.5', 'S3.6',
			'S4.1.1', 'S4.2', 'S4.3', 'S4.5',
			'S5.3',
			'S6.1', 'S6.2', 'S6.3', 'S6.4', 'S6.5', 'S6.6', 'S6.7', 'S6.8',
			'G1.1', 'G1.2',
			'G2.1', 'G2.2', 'G2.3', 'G2.4', 'G2.5', 'G2.6', 'G2.7', 'G2.8', 'G2.9', 'G2.10',
			'G3.1', 'G3.2', 'G3.3',
			'G4.1', 'G4.2', 'G4.3',
			'G5.1.1', 'G5.2', 'G5.3', 'G5.4',
			'G61.1', 'G6.2', 'G6.3', 'G6.4', 'G6.5', 'G6.6', 'G6.7',
			'G71.1', 'G7.2', 'G7.3'
		],
		'ИТ-компании': ['E1.1', 'E1.2', 'E1.3', 'E1.4', 'E1.5', 'E1.6', 'E1.8',
			'E2.2.3', 'E2.6.3', 'E2.7', 'E2.8', 'E2.10',
			'E3.1', 'E3.2', 'E3.3', 'E3.4', 'E3.5', 'E3.6', 'E3.7',
			'E4.1', 'E4.2', 'E4.3', 'E4.5', 'E4.6', 'E4.7', 'E4.8', 'E4.9', 'E4.10', 'E4.11', 'E4.12', 'E4.13',
			'E5.1',
			'S1.1', 'S1.2', 'S1.3', 'S1.4',
			'S2.7', 'S2.9', 'S2.10', 'S2.11', 'S2.13', 'S2.14', 'S2.15', 'S2.16', 'S2.17',
			'S3.1', 'S3.2', 'S3.3', 'S3.4', 'S3.5', 'S3.6',
			'S4.1.1', 'S4.2', 'S4.3', 'S4.5',
			'S5.3',
			'S6.1', 'S6.2', 'S6.3', 'S6.4', 'S6.5', 'S6.6', 'S6.7', 'S6.8',
			'G1.1', 'G1.2',
			'G2.1', 'G2.2', 'G2.3', 'G2.4', 'G2.5', 'G2.6', 'G2.7', 'G2.8', 'G2.9', 'G2.10',
			'G3.1', 'G3.2', 'G3.3',
			'G4.1', 'G4.2', 'G4.3',
			'G5.1.1', 'G5.2', 'G5.3', 'G5.4',
			'G61.1', 'G6.2', 'G6.3', 'G6.4', 'G6.5', 'G6.6', 'G6.7',
			'G71.1', 'G7.2', 'G7.3'
		],

		'Кредитные организации': ['E1.1', 'E1.2', 'E1.3', 'E1.4', 'E1.5',
			'E2.1', 'E2.2', 'E2.3', 'E2.4', 'E2.5',
			'E3.1', 'E3.2', 'E3.3', 'E3.4', 'E3.5',
			'E4.1', 'E4.2', 'E4.3', 'E4.5', 'E4.6', 'E4.7', 'E4.8', 'E4.9', 'E4.10', 'E4.11', 'E4.12', 'E4.13',
			'E5.1.1', 'E5.1.3', 'E5.2', 'E5.3.1',
			'S1.1', 'S1.2', 'S1.3', 'S1.4',
			'S2.7', 'S2.9', 'S2.10', 'S2.11', 'S2.13', 'S2.14', 'S2.15', 'S2.16', 'S2.17',
			'S3.1', 'S3.2', 'S3.3', 'S3.4', 'S3.5', 'S3.6',
			'S4.1.2', 'S4.2', 'S4.3', 'S4.4', 'S4.5',
			'S5.1.1', 'S5.2', 'S5.3',
			'S6.1', 'S6.2', 'S6.3', 'S6.4', 'S6.5', 'S6.6', 'S6.7', 'S6.8',
			'G1.1', 'G1.2',
			'G2.1', 'G2.2', 'G2.3', 'G2.4', 'G2.5', 'G2.6', 'G2.7', 'G2.8', 'G2.9', 'G2.10',
			'G3.1', 'G3.2', 'G3.3',
			'G4.1', 'G4.2', 'G4.3',
			'G5.1.2', 'G5.2', 'G5.3', 'G5.4',
			'G61.1', 'G6.2', 'G6.3', 'G6.4', 'G6.5', 'G6.6', 'G6.7',
			'G71.1', 'G7.2', 'G7.3',
			'G8.1', 'G8.2'
		],
		'Страховые организации': ['E1.1', 'E1.2', 'E1.3', 'E1.4', 'E1.5',
			'E2.1', 'E2.2', 'E2.3', 'E2.4',
			'E3.1', 'E3.2', 'E3.3', 'E3.4', 'E3.5',
			'E4.1', 'E4.2', 'E4.3', 'E4.5', 'E4.6', 'E4.7', 'E4.8', 'E4.9', 'E4.10', 'E4.11', 'E4.12', 'E4.13',
			'E5.1.3', 'E5.2', 'E5.3.2', 'E5.3.3',
			'S1.1', 'S1.2', 'S1.3', 'S1.4',
			'S2.7', 'S2.9', 'S2.10', 'S2.11', 'S2.13', 'S2.14', 'S2.15', 'S2.16', 'S2.17',
			'S3.1', 'S3.2', 'S3.3', 'S3.4', 'S3.5', 'S3.6',
			'S4.1.2', 'S4.2', 'S4.3', 'S4.4', 'S4.5',
			'S5.1.3', 'S5.2', 'S5.3',
			'S6.1', 'S6.2', 'S6.3', 'S6.4', 'S6.5', 'S6.6', 'S6.7', 'S6.8',
			'G1.1', 'G1.2',
			'G2.1', 'G2.2', 'G2.3', 'G2.4', 'G2.5', 'G2.6', 'G2.7', 'G2.8', 'G2.9', 'G2.10',
			'G3.1', 'G3.2', 'G3.3',
			'G4.1', 'G4.2', 'G4.3',
			'G5.1.2', 'G5.2', 'G5.3', 'G5.4',
			'G61.1', 'G6.2', 'G6.3', 'G6.4', 'G6.5', 'G6.6', 'G6.7',
			'G71.1', 'G7.2', 'G7.3',
			'G8.1', 'G8.2'
		],
		'Управляющие компании': ['E1.1', 'E1.2', 'E1.3', 'E1.4', 'E1.5',
			'E2.1', 'E2.2', 'E2.3', 'E2.4',
			'E3.1', 'E3.2', 'E3.3', 'E3.4', 'E3.5',
			'E4.1', 'E4.2', 'E4.3', 'E4.5', 'E4.6', 'E4.7', 'E4.8', 'E4.9', 'E4.10', 'E4.11', 'E4.12', 'E4.13',
			'E5.1.2', 'E5.2', 'E5.3.2',
			'S1.1', 'S1.2', 'S1.3', 'S1.4',
			'S2.7', 'S2.9', 'S2.10', 'S2.11', 'S2.13', 'S2.14', 'S2.15', 'S2.16', 'S2.17',
			'S3.1', 'S3.2', 'S3.3', 'S3.4', 'S3.5', 'S3.6',
			'S4.1.2', 'S4.2', 'S4.3', 'S4.4', 'S4.5',
			'S5.1.2', 'S5.2', 'S5.3',
			'S6.1', 'S6.2', 'S6.3', 'S6.4', 'S6.5', 'S6.6', 'S6.7', 'S6.8',
			'G1.1', 'G1.2',
			'G2.1', 'G2.2', 'G2.3', 'G2.4', 'G2.5', 'G2.6', 'G2.7', 'G2.8', 'G2.9', 'G2.10',
			'G3.1', 'G3.2', 'G3.3',
			'G4.1', 'G4.2', 'G4.3',
			'G5.1.2', 'G5.2', 'G5.3', 'G5.4',
			'G61.1', 'G6.2', 'G6.3', 'G6.4', 'G6.5', 'G6.6', 'G6.7',
			'G71.1', 'G7.2', 'G7.3',
			'G8.1', 'G8.2'
		],
		'Биржи': ['E1.1', 'E1.2', 'E1.3', 'E1.4', 'E1.5',
			'E2.1', 'E2.2', 'E2.3', 'E2.4',
			'E3.1', 'E3.2', 'E3.3', 'E3.4', 'E3.5',
			'E4.1', 'E4.2', 'E4.3', 'E4.5', 'E4.6', 'E4.7', 'E4.8', 'E4.9', 'E4.10', 'E4.11', 'E4.12', 'E4.13',
			'E5.1.4', 'E5.1.5', 'E5.2', 'E5.3.4',
			'S1.1', 'S1.2', 'S1.3', 'S1.4',
			'S2.7', 'S2.9', 'S2.10', 'S2.11', 'S2.13', 'S2.14', 'S2.15', 'S2.16', 'S2.17',
			'S3.1', 'S3.2', 'S3.3', 'S3.4', 'S3.5', 'S3.6',
			'S4.1.2', 'S4.3', 'S4.4', 'S4.5',
			'S5.1.4', 'S5.2', 'S5.3',
			'S6.1', 'S6.2', 'S6.3', 'S6.4', 'S6.5', 'S6.6', 'S6.7', 'S6.8',
			'G1.1', 'G1.2',
			'G2.1', 'G2.2', 'G2.3', 'G2.4', 'G2.5', 'G2.6', 'G2.7', 'G2.8', 'G2.9', 'G2.10',
			'G3.1', 'G3.2', 'G3.3',
			'G4.1', 'G4.2', 'G4.3',
			'G5.1.2', 'G5.2', 'G5.3', 'G5.4',
			'G61.1', 'G6.2', 'G6.3', 'G6.4', 'G6.5', 'G6.6', 'G6.7',
			'G71.1', 'G7.2', 'G7.3',
			'G8.1', 'G8.2'
		],
		'Инфраструктурная организации финансового рынка': ['E1.1', 'E1.2', 'E1.3', 'E1.4', 'E1.5',
			'E2.1', 'E2.2', 'E2.3', 'E2.4',
			'E3.1', 'E3.2', 'E3.3', 'E3.4', 'E3.5',
			'E4.1', 'E4.2', 'E4.3', 'E4.5', 'E4.6', 'E4.7', 'E4.8', 'E4.9', 'E4.10', 'E4.11', 'E4.12', 'E4.13',
			'E5.1.1', 'E5.1.3', 'E5.2', 'E5.3.1', 
			'S1.1', 'S1.2', 'S1.3', 'S1.4',
			'S2.7', 'S2.9', 'S2.10', 'S2.11', 'S2.13', 'S2.14', 'S2.15', 'S2.16', 'S2.17',
			'S3.1', 'S3.2', 'S3.3', 'S3.4', 'S3.5', 'S3.6',
			'S4.1.2', 'S4.3', 'S4.4', 'S4.5',
			'S5.1.1', 'S5.2', 'S5.3',
			'S6.1', 'S6.2', 'S6.3', 'S6.4', 'S6.5', 'S6.6', 'S6.7', 'S6.8',
			'G1.1', 'G1.2',
			'G2.1', 'G2.2', 'G2.3', 'G2.4', 'G2.5', 'G2.6', 'G2.7', 'G2.8', 'G2.9', 'G2.10',
			'G3.1', 'G3.2', 'G3.3',
			'G4.1', 'G4.2', 'G4.3',
			'G5.1.2', 'G5.2', 'G5.3', 'G5.4',
			'G61.1', 'G6.2', 'G6.3', 'G6.4', 'G6.5', 'G6.6', 'G6.7',
			'G71.1', 'G7.2', 'G7.3',
			'G8.1', 'G8.2'
		],
		'Прочие финансовые организации': ['E1.1', 'E1.2', 'E1.3', 'E1.4', 'E1.5',
			'E2.1', 'E2.2', 'E2.3', 'E2.4', 'E2.5',
			'E3.1', 'E3.2', 'E3.3', 'E3.4', 'E3.5',
			'E4.1', 'E4.2', 'E4.3', 'E4.5', 'E4.6', 'E4.7', 'E4.8', 'E4.9', 'E4.10', 'E4.11', 'E4.12', 'E4.13',
			'E5.1.3', 'E5.2', 'E5.3.1',
			'S1.1', 'S1.2', 'S1.3', 'S1.4',
			'S2.7', 'S2.9', 'S2.10', 'S2.11', 'S2.13', 'S2.14', 'S2.15', 'S2.16', 'S2.17',
			'S3.1', 'S3.2', 'S3.3', 'S3.4', 'S3.5', 'S3.6',
			'S4.1.2', 'S4.2', 'S4.3', 'S4.4', 'S4.5',
			'S5.1.1', 'S5.2', 'S5.3',
			'S6.1', 'S6.2', 'S6.3', 'S6.4', 'S6.5', 'S6.6', 'S6.7', 'S6.8',
			'G1.1', 'G1.2',
			'G2.1', 'G2.2', 'G2.3', 'G2.4', 'G2.5', 'G2.6', 'G2.7', 'G2.8', 'G2.9', 'G2.10',
			'G3.1', 'G3.2', 'G3.3',
			'G4.1', 'G4.2', 'G4.3',
			'G5.1.2', 'G5.2', 'G5.3', 'G5.4',
			'G61.1', 'G6.2', 'G6.3', 'G6.4', 'G6.5', 'G6.6', 'G6.7',
			'G71.1', 'G7.2', 'G7.3',
			'G8.1', 'G8.2'
		],
		},
		block_E: {

		},
		block_S: {

		},
		block_G: {

		}
		
		
	};

	const hide = (e) => {
		e.style.display = 'none';
	}
	const show = (e) => {
		e.style.display = 'block';
	}

	$('#company_cat').select2({
		placeholder: "Категория компании"
	});
	$('#company_cat_ne_fin').select2({
		placeholder: "Отрасль компании"
	});
	$('#company_cat_fin').select2({
		placeholder: "Отрасль компании"
	});

	const calcWrapper = document.querySelector('.calc-wrapper');

	const inputComapnyName = document.querySelector('#company_name');
	const selectMain = document.querySelector('#company_cat');
	const selectNotFin = document.getElementById('company_cat_ne_fin');
	const selectFin = document.getElementById('company_cat_fin');
	const startBtn = document.querySelector('.button.start');
	let calcPages = document.querySelectorAll('.step');

	const toggleSelects = () => {

		if (selectMain.value == 'not_fin') {
			selectNotFin.parentElement.classList.remove('hidden');
			selectFin.parentElement.classList.add('hidden');
		} else {
			selectNotFin.parentElement.classList.add('hidden');
			selectFin.parentElement.classList.remove('hidden');
		}
		observeToStart();
	}

	const observeToStart = () => {
		if (selectMain.value == 'not_fin') {
			if (selectNotFin.value != '' && inputComapnyName.value != '') {
				startBtn.classList.remove('unactive');
			} else {
				startBtn.classList.add('unactive');
			}
		} else {
			if (selectFin.value != '' && inputComapnyName.value != '') {
				startBtn.classList.remove('unactive');
			} else {
				startBtn.classList.add('unactive');
			}
		}

	}
	inputComapnyName.addEventListener('input', () => {
		observeToStart();
	});

	$('#company_cat').on('select2:select', function () {
		toggleSelects();
	});
	$('#company_cat_ne_fin').on('select2:select', function () {
		toggleSelects();
	});
	$('#company_cat_fin').on('select2:select', function () {
		toggleSelects();
	});

	const calcStart = () => {
		let finance = Boolean;
		let indName = '';

		if (selectMain.value == 'not_fin') {
			finance = false;
		} else {
			finance = true;
		}

		if (selectMain.value == 'not_fin') {
			indName = selectNotFin.value;
		} else {
			indName = selectFin.value;
		}


		if (finance === false) {
			calcPages.forEach((e, i) => {
				if (e.classList.contains('block_E_fin')) {
					e.remove();
				}
			});
		} else {
			calcPages.forEach((e, i) => {
				if (e.classList.contains('block_E')) {
					e.remove();
				}
			});
		}

		calcPages = document.querySelectorAll('.step');

		hide(calcPages[0]);
		show(calcPages[1]);

		params.company.industry = indName;
		params.company.name = inputComapnyName.value;
		params.company.finance = finance;

		setQuestions();
		const nextBtns = document.querySelectorAll('.button.next');

		nextBtns.forEach(e => {
			e.addEventListener('click', () => {
				nextFunc(e);
			})
		})
	}

	startBtn.addEventListener('click', () => {
		calcStart();
	})

	const setQuestions = () => {
		const selectedIndustry = params.questions[params.company.industry];
		
		const questions = document.querySelectorAll('.questions-item');
		questions.forEach((e, i) => {
			if (selectedIndustry.includes(e.dataset.id)) {
				e.classList.add('active-question');
			} else {
				e.style.display = 'none';
				if (e.dataset.id == 'G0.1' || e.dataset.id == 'G0.2') {
					e.style.display = 'block';
					e.parentElement.classList.remove('hidden');
				}
			}
			
			
		});
		
		const questionsWrap = document.querySelectorAll('.questions');

		questionsWrap.forEach(e => {
			const questions = e.querySelectorAll('.questions-item');
			let index = 1;
			questions.forEach(e => {
				if (e.classList.contains('active-question')) {
					index++;
				}
			})

			if (index === 1) { 
				e.parentElement.classList.add('hidden');
				if (e.parentElement.dataset.id == 'G0') {
					e.parentElement.classList.remove('hidden');
				}
			}
			
		});

		calcRenderItems();
	}

	const calcRenderItems = () => {

		const calcWrapE4 = document.querySelectorAll('.calc-wrapper-item');
		
		const arr_4_1_2 = ['E4.1','E4.2','E4.3','E4.4','E4.5','E4.6','E4.7','E4.8','E4.9','E4.10','E4.11','E4.12', 'E4.13'];
		const arr_4_2_2 = ['E4.1','E4.2','E4.3','E4.5','E4.6','E4.7','E4.8','E4.9','E4.10','E4.11','E4.12', 'E4.13'];

		const arr_4_1_Pass_transport = ['E4.1','E4.2','E4.3','E4.4','E4.5','E4.6','E4.7','E4.8','E4.9','E4.10','E4.11','E4.12'];
		const arr_4_1_Pass_transport_2 = ['E4.1','E4.2','E4.3','E4.5','E4.6','E4.7','E4.8','E4.9','E4.10','E4.11','E4.12'];

		const arr_4_1_opt = ['E4.1','E4.2','E4.3','E4.4','E4.5','E4.6','E4.8','E4.9','E4.10'];
		const arr_4_1_opt_2 = ['E4.1','E4.2','E4.3','E4.4','E4.5','E4.6','E4.8','E4.9','E4.10'];

		const arr_4_1_stroyka = ['E4.1','E4.2','E4.3','E4.4','E4.5','E4.6','E4.7','E4.8','E4.9','E4.10','E4.11','E4.12'];
		const arr_4_1_stroyka_2 = ['E4.1','E4.2','E4.3','E4.5','E4.6','E4.7','E4.8','E4.9','E4.10','E4.11','E4.12'];

		const arr_4_1_IT = ['E4.1','E4.2','E4.3','E4.4','E4.5','E4.6','E4.8','E4.9','E4.10'];
		const arr_4_1_IT_2 = ['E4.1','E4.2','E4.3','E4.5','E4.6','E4.8','E4.9','E4.10'];

		const arr_4_1_Fin = ['E4.1', 'E4.2', 'E4.3', 'E4.5', 'E4.6', 'E4.7', 'E4.8', 'E4.9', 'E4.10', 'E4.11', 'E4.12', 'E4.13'];
		const arr_4_1_Fin_2 = ['E4.1', 'E4.2', 'E4.3', 'E4.4', 'E4.5', 'E4.6', 'E4.7', 'E4.8', 'E4.9', 'E4.10', 'E4.11', 'E4.12', 'E4.13'];

		const arr_G_NO_NO = ['G2.1', 'G2.2', 'G2.3', 'G2.4', 'G2.6', 'G2.7', 'G2.8', 'G2.9', 'G2.10'];
		const arr_G_0_NO_YES = ['G2.1', 'G2.3', 'G2.4', 'G2.6', 'G2.7', 'G2.8', 'G2.9', 'G2.10'];
		const arr_G_0_NO_YES_2 = ['G2.1', 'G2.3', 'G2.4','G2.5', 'G2.6', 'G2.7', 'G2.8', 'G2.9', 'G2.10'];
		const arr_G_0_All = ['G2.1','G2.2', 'G2.3', 'G2.4','G2.5', 'G2.6', 'G2.7', 'G2.8', 'G2.9', 'G2.10'];

		function renderFunc() {
			const selectInputFunc = (elem) => {
				let input = document.getElementById(elem);
				return input;d
			}
			
			calcWrapE4.forEach(e => {
				const allQuestionsE4 = e.querySelectorAll('.questions-item');

				if (e.dataset.id == 'E4') {
					
					if (params.company.industry == 'Добыча нефти и газа' ||
							params.company.industry == 'Черная металлургия' ||
							params.company.industry == 'Электроэнергетика и сети' ||
							params.company.industry == 'Горная добыча' ||
							params.company.industry == 'Лесная промышленность и деревообработка' ||
							params.company.industry == 'Прочая промышленность' ||
							params.company.industry == 'Химическая промышленность' ||
							params.company.industry == 'Цветная металлургия') {
							
						if (selectInputFunc('E4.1-1').checked && selectInputFunc('E4.1-2').checked || !selectInputFunc('E4.1-2').checked && selectInputFunc('E4.2-2').checked) {
							allQuestionsE4.forEach(e => {
								if (arr_4_1_2.includes(e.dataset.id)) {
									e.classList.add('active-question');
									e.style.display = 'block';
								} else {
									e.classList.remove('active-question');
									e.style.display = 'none';
								}
							})
						} else {
							allQuestionsE4.forEach(e => {
								if (arr_4_2_2.includes(e.dataset.id)) {
									e.classList.add('active-question');
									e.style.display = 'block';
								} else {
									e.classList.remove('active-question');
									e.style.display = 'none';
								}
							})
						}
					}
					
					
					if (params.company.industry == 'Пассажирский транспорт' ||
							params.company.industry == 'Грузовой транспорт и логистика' ||
							params.company.industry == 'Сельское хозяйство') {
						if (selectInputFunc('E4.1-1').checked && selectInputFunc('E4.1-2').checked || !selectInputFunc('E4.1-2').checked && selectInputFunc('E4.2-2').checked) {
							allQuestionsE4.forEach(e => {
								if (arr_4_1_Pass_transport.includes(e.dataset.id)) {
									e.classList.add('active-question');
									e.style.display = 'block';
								} else {
									e.classList.remove('active-question');
									e.style.display = 'none';
								}
							})
						} else {
							allQuestionsE4.forEach(e => {
								if (arr_4_1_Pass_transport_2.includes(e.dataset.id)) {
									e.classList.add('active-question');
									e.style.display = 'block';
								} else {
									e.classList.remove('active-question');
									e.style.display = 'none';
								}
							})
						}
					}

					if (params.company.industry == 'Потребительский сектор' ||
							params.company.industry == 'Оптовая торговля' ) {
						if (selectInputFunc('E4.1-1').checked && selectInputFunc('E4.1-2').checked || !selectInputFunc('E4.1-2').checked && selectInputFunc('E4.2-2').checked) {
							allQuestionsE4.forEach(e => {
								if (arr_4_1_opt.includes(e.dataset.id)) {
									e.classList.add('active-question');
									e.style.display = 'block';
								} else {
									e.classList.remove('active-question');
									e.style.display = 'none';
								}
							})
						} else {
							allQuestionsE4.forEach(e => {
								if (arr_4_1_opt_2.includes(e.dataset.id)) {
									e.classList.add('active-question');
									e.style.display = 'block';
								} else {
									e.classList.remove('active-question');
									e.style.display = 'none';
								}
							})
						}
					}

					if (params.company.industry == 'Строительство зданий' ||
							params.company.industry == 'Строительство прочих сооружений' ) {
						if (selectInputFunc('E4.1-1').checked && selectInputFunc('E4.1-2').checked || !selectInputFunc('E4.1-2').checked && selectInputFunc('E4.2-2').checked) {
							allQuestionsE4.forEach(e => {
								if (arr_4_1_stroyka.includes(e.dataset.id)) {
									e.classList.add('active-question');
									e.style.display = 'block';
								} else {
									e.classList.remove('active-question');
									e.style.display = 'none';
								}
							})
						} else {
							allQuestionsE4.forEach(e => {
								if (arr_4_1_stroyka_2.includes(e.dataset.id)) {
									e.classList.add('active-question');
									e.style.display = 'block';
								} else {
									e.classList.remove('active-question');
									e.style.display = 'none';
								}
							})
						}
					}

					if (params.company.industry == 'Нефинансовые услуги' ||
							params.company.industry == 'ИТ-компании' ) {
						if (selectInputFunc('E4.1-1').checked && selectInputFunc('E4.1-2').checked || !selectInputFunc('E4.1-2').checked && selectInputFunc('E4.2-2').checked) {
							allQuestionsE4.forEach(e => {
								if (arr_4_1_IT.includes(e.dataset.id)) {
									e.classList.add('active-question');
									e.style.display = 'block';
								} else {
									e.classList.remove('active-question');
									e.style.display = 'none';
								}
							})
						} else {
							allQuestionsE4.forEach(e => {
								if (arr_4_1_IT_2.includes(e.dataset.id)) {
									e.classList.add('active-question');
									e.style.display = 'block';
								} else {
									e.classList.remove('active-question');
									e.style.display = 'none';
								}
							})
						}
					}
					
					if (params.company.industry == 'Кредитные организации' ||
							params.company.industry == 'Страховые организации' ||
							params.company.industry == 'Управляющие компании' ||
							params.company.industry == 'Биржи' ||
							params.company.industry == 'Инфраструктурная организации финансового рынка' ||
							params.company.industry == 'Прочие финансовые организации' ) {
						if (selectInputFunc('E4.1-1').checked && selectInputFunc('E4.1-2').checked || !selectInputFunc('E4.1-2').checked && selectInputFunc('E4.2-2').checked) {
							allQuestionsE4.forEach(e => {
								if (arr_4_1_Fin.includes(e.dataset.id)) {
									e.classList.add('active-question');
									e.style.display = 'block';
								} else {
									e.classList.remove('active-question');
									e.style.display = 'none';
								}
							})
						} else {
							allQuestionsE4.forEach(e => {
								if (arr_4_1_Fin_2.includes(e.dataset.id)) {
									e.classList.add('active-question');
									e.style.display = 'block';
								} else {
									e.classList.remove('active-question');
									e.style.display = 'none';
								}
							})
						}
					}


				} 

				if (e.dataset.id == 'G2') {
					
					if (selectInputFunc('G0.1-2').checked && selectInputFunc('G0.2-2').checked) {
						allQuestionsE4.forEach(e => {
							if (arr_G_NO_NO.includes(e.dataset.id)) {
								e.classList.add('active-question');
								e.style.display = 'block';
							} else {
								e.classList.remove('active-question');
								e.style.display = 'none';
							}
						})
					} 
					
					if (selectInputFunc('G0.1-2').checked && selectInputFunc('G0.2-1').checked) {
						allQuestionsE4.forEach(e => {
							if (arr_G_0_NO_YES.includes(e.dataset.id)) {
								e.classList.add('active-question');
								e.style.display = 'block';
							} else {
								e.classList.remove('active-question');
								e.style.display = 'none';
							}
						})
					} 

					if (selectInputFunc('G0.1-1').checked && selectInputFunc('G0.2-1').checked) {
						allQuestionsE4.forEach(e => {
							if (arr_G_0_NO_YES_2.includes(e.dataset.id)) {
								e.classList.add('active-question');
								e.style.display = 'block';
							} else {
								e.classList.remove('active-question');
								e.style.display = 'none';
							}
						})
					} 

					if (selectInputFunc('G0.1-1').checked && selectInputFunc('G0.2-2').checked) {
						allQuestionsE4.forEach(e => {
							if (arr_G_0_All.includes(e.dataset.id)) {
								e.classList.add('active-question');
								e.style.display = 'block';
							} else {
								e.classList.remove('active-question');
								e.style.display = 'none';
							}
						})
					} 

				}

			})
			
		} 
		calcWrapper.addEventListener('change', (event) => {
			let target = event.target;

			if (target.id == 'E4.1-1' || 
					target.id == 'E4.1-2' ||   
					target.id == 'E4.2-1' ||   
					target.id == 'E4.2-2' ||   
					target.id == 'G0.1-1' ||   
					target.id == 'G0.1-2' ||   
					target.id == 'G0.2-1' ||   
					target.id == 'G0.2-2') {
				renderFunc();
			}
		});
		
		
		

	}

	const nextFunc = (elem) => {
		let filled = false;
		const stepWrap = elem.parentElement;
		const questions = stepWrap.querySelectorAll('.active-question');
		const questionBlocks = stepWrap.querySelectorAll('.calc-wrapper-item');
		let answerLength = 0;
		params[stepWrap.id] = {};
		
		questions.forEach((item) => {
			params[stepWrap.id][item.parentElement.parentElement.dataset.id] = {
				summ: 0,
				length: 0,
				answers: {},
				answers_name: {}
			};
			
		});
		questions.forEach((item, index) => {
			const answers = item.querySelectorAll('input[type="radio"]');
			answers.forEach((answer) => {
				if (answer.checked) {
					params[stepWrap.id][item.parentElement.parentElement.dataset.id].answers[answer.name] = +answer.value;
					params[stepWrap.id][item.parentElement.parentElement.dataset.id].answers_name[answer.name] = answer.closest('.questions-item').dataset.text.trim();
					params[stepWrap.id][item.parentElement.parentElement.dataset.id].summ += +answer.value;
					answerLength++;
				}
			});
			let length = item.parentElement.parentElement.querySelectorAll('.active-question').length;
			params[stepWrap.id][item.parentElement.parentElement.dataset.id].length = length;
		});

		
		if (answerLength == questions.length) {
			filled = true;
		} else {
			filled = false;
		}

		if (filled == true) {
			if (elem.classList.contains('calculate')) {
				calculateESG();
			}
			stepWrap.style.display = 'none';
			stepWrap.nextElementSibling.style.display = 'block';
			var elementClick = '#top';
			var destination = $(elementClick).offset().top;
			$("html:not(:animated),body:not(:animated)").animate({scrollTop: destination}, 300);
			return false;
			
		} else {
			alert('Что бы пройти дальше, ответьте на все вопросы!');
			var elementClick = '#top';
			var destination = $(elementClick).offset().top;
			$("html:not(:animated),body:not(:animated)").animate({scrollTop: destination}, 300);
			return false;
		}
	}

	const calculateESG = () => {
		console.log(params);
		//title
		const title = document.querySelector('.calc h1.title');
		title.textContent = 'Отчет';

		const companyName = document.querySelector('.company_name');
		const companyCat = document.querySelector('.company_cat');
		const companyInd = document.querySelector('.company_ind');
		companyName.textContent = params.company.name;
		companyInd.textContent = params.company.industry;
		
		if (params.finance === true) {
			companyCat.textContent = 'Финансовые компании';
		} else {
			companyCat.textContent = 'Нефинансовые компании';
		}


		//block E
		let E_1_length = params.block_E['E1'].length;
		let E_1_summ = params.block_E['E1'].summ;
		let E_2_length = params.block_E['E2'].length;
		let E_2_summ = params.block_E['E2'].summ;
		let E_3_length = params.block_E['E3'].length;
		let E_3_summ = params.block_E['E3'].summ;
		let E_4_length = params.block_E['E4'].length;
		let E_4_summ = params.block_E['E4'].summ;
		let E_5_length = params.block_E['E5'].length;
		let E_5_summ = params.block_E['E5'].summ;

		let block_E1_bar = 100 / E_1_length * E_1_summ;
		const block_E1_bar_line = document.querySelector('.bar_E1');
		block_E1_bar_line.style.width = block_E1_bar + '%';
		block_E1_bar_line.style.background = colorFunc(block_E1_bar);
		const block_E1_bar_line_text = document.querySelector('.bar_E1 p');
		block_E1_bar_line_text.textContent = Math.round(block_E1_bar) + '%';

		let block_E2_bar = 100 / E_2_length * E_2_summ;
		const block_E2_bar_line = document.querySelector('.bar_E2');
		block_E2_bar_line.style.width = block_E2_bar + '%';
		block_E2_bar_line.style.background = colorFunc(block_E2_bar);
		const block_E2_bar_line_text = document.querySelector('.bar_E2 p');
		block_E2_bar_line_text.textContent = Math.round(block_E2_bar) + '%';

		let block_E3_bar = 100 / E_3_length * E_3_summ;
		const block_E3_bar_line = document.querySelector('.bar_E3');
		block_E3_bar_line.style.width = block_E3_bar + '%';
		block_E3_bar_line.style.background = colorFunc(block_E3_bar);

		const block_E3_bar_line_text = document.querySelector('.bar_E3 p');
		block_E3_bar_line_text.textContent = Math.round(block_E3_bar) + '%';

		let block_E4_bar = 100 / E_4_length * E_4_summ;
		const block_E4_bar_line = document.querySelector('.bar_E4');
		block_E4_bar_line.style.width = block_E4_bar + '%';
		block_E4_bar_line.style.background = colorFunc(block_E4_bar);

		const block_E4_bar_line_text = document.querySelector('.bar_E4 p');
		block_E4_bar_line_text.textContent = Math.round(block_E4_bar) + '%';

		let block_E5_bar = 100 / E_5_length * E_5_summ;
		const block_E5_bar_line = document.querySelector('.bar_E5');
		block_E5_bar_line.style.width = block_E5_bar + '%';
		block_E5_bar_line.style.background = colorFunc(block_E5_bar);

		const block_E5_bar_line_text = document.querySelector('.bar_E5 p');
		block_E5_bar_line_text.textContent = Math.round(block_E5_bar) + '%';

		//block S

		let S_1_length = params.block_S['S1'].length;
		let S_1_summ = params.block_S['S1'].summ;
		let S_2_length = params.block_S['S2'].length;
		let S_2_summ = params.block_S['S2'].summ;
		let S_3_length = params.block_S['S3'].length;
		let S_3_summ = params.block_S['S3'].summ;

		const block_S4_bar_line = document.querySelector('.bar_S4');
		if (params.block_S['S4']) {
			let S_4_length = params.block_S['S4'].length;
			let S_4_summ = params.block_S['S4'].summ;
			let block_S4_bar = 100 / S_4_length * S_4_summ;
			block_S4_bar_line.style.width = block_S4_bar + '%';
			block_S4_bar_line.style.background = colorFunc(block_S4_bar);

			const block_S4_bar_line_text = document.querySelector('.bar_S4 p');
			block_S4_bar_line_text.textContent = Math.round(block_S4_bar) + '%';
		} else {
			block_S4_bar_line.closest('.result-wrap-item-bar').classList.add('hidden');
		}

		let S_5_length = params.block_S['S5'].length;
		let S_5_summ = params.block_S['S5'].summ;
		let S_6_length = params.block_S['S6'].length;
		let S_6_summ = params.block_S['S6'].summ;

		let block_S1_bar = 100 / S_1_length * S_1_summ;
		const block_S1_bar_line = document.querySelector('.bar_S1');
		block_S1_bar_line.style.width = block_S1_bar + '%';
		block_S1_bar_line.style.background = colorFunc(block_S1_bar);

		const block_S1_bar_line_text = document.querySelector('.bar_S1 p');
		block_S1_bar_line_text.textContent = Math.round(block_S1_bar) + '%';

		let block_S2_bar = 100 / S_2_length * S_2_summ;
		const block_S2_bar_line = document.querySelector('.bar_S2');
		block_S2_bar_line.style.width = block_S2_bar + '%';
		block_S2_bar_line.style.background = colorFunc(block_S2_bar);

		const block_S2_bar_line_text = document.querySelector('.bar_S2 p');
		block_S2_bar_line_text.textContent = Math.round(block_S2_bar) + '%';

		let block_S3_bar = 100 / S_3_length * S_3_summ;
		const block_S3_bar_line = document.querySelector('.bar_S3');
		block_S3_bar_line.style.width = block_S3_bar + '%';
		block_S3_bar_line.style.background = colorFunc(block_S3_bar);

		const block_S3_bar_line_text = document.querySelector('.bar_S3 p');
		block_S3_bar_line_text.textContent = Math.round(block_S3_bar) + '%';

		

		let block_S5_bar = 100 / S_5_length * S_5_summ;
		const block_S5_bar_line = document.querySelector('.bar_S5');
		block_S5_bar_line.style.width = block_S5_bar + '%';
		block_S5_bar_line.style.background = colorFunc(block_S5_bar);

		const block_S5_bar_line_text = document.querySelector('.bar_S5 p');
		block_S5_bar_line_text.textContent = Math.round(block_S5_bar) + '%';

		let block_S6_bar = 100 / S_6_length * S_6_summ;
		const block_S6_bar_line = document.querySelector('.bar_S6');
		block_S6_bar_line.style.width = block_S6_bar + '%';
		block_S6_bar_line.style.background = colorFunc(block_S6_bar);

		const block_S6_bar_line_text = document.querySelector('.bar_S6 p');
		block_S6_bar_line_text.textContent = Math.round(block_S6_bar) + '%';


		//block SG

		let G_1_length = params.block_G['G1'].length;
		let G_1_summ = params.block_G['G1'].summ;
		let G_2_length = params.block_G['G2'].length;
		let G_2_summ = params.block_G['G2'].summ;
		let G_3_length = params.block_G['G3'].length;
		let G_3_summ = params.block_G['G3'].summ;
		let G_4_length = params.block_G['G4'].length;
		let G_4_summ = params.block_G['G4'].summ;
		let G_5_length = params.block_G['G5'].length;
		let G_5_summ = params.block_G['G5'].summ;
		let G_6_length = params.block_G['G6'].length;
		let G_6_summ = params.block_G['G6'].summ;
		let G_7_length = params.block_G['G7'].length;
		let G_7_summ = params.block_G['G7'].summ;


		const block_G8_bar_line = document.querySelector('.bar_G8');
		if (params.block_G['G8']) {
			let G_8_length = params.block_G['G8'].length;
			let G_8_summ = params.block_G['G8'].summ;
			let block_G8_bar = 100 / G_8_length * G_8_summ;
			block_G8_bar_line.style.width = block_G8_bar + '%';
			block_G8_bar_line.style.background = colorFunc(block_G8_bar);

			const block_G8_bar_line_text = document.querySelector('.bar_G8 p');
			block_G8_bar_line_text.textContent = Math.round(block_G8_bar) + '%';
		} else {
			block_G8_bar_line.closest('.result-wrap-item-bar').classList.add('hidden');
		}

		let block_G1_bar = 100 / G_1_length * G_1_summ;
		const block_G1_bar_line = document.querySelector('.bar_S1');
		block_G1_bar_line.style.width = block_G1_bar + '%';
		block_G1_bar_line.style.background = colorFunc(block_G1_bar);

		const block_G1_bar_line_text = document.querySelector('.bar_S1 p');
		block_G1_bar_line_text.textContent = Math.round(block_G1_bar) + '%';

		let block_G2_bar = 100 / G_2_length * G_2_summ;
		const block_G2_bar_line = document.querySelector('.bar_G2');
		block_G2_bar_line.style.width = block_G2_bar + '%';
		block_G2_bar_line.style.background = colorFunc(block_G2_bar);

		const block_G2_bar_line_text = document.querySelector('.bar_G2 p');
		block_G2_bar_line_text.textContent = Math.round(block_G2_bar) + '%';

		let block_G3_bar = 100 / G_3_length * G_3_summ;
		const block_G3_bar_line = document.querySelector('.bar_G3');
		block_G3_bar_line.style.width = block_G3_bar + '%';
		block_G3_bar_line.style.background = colorFunc(block_G3_bar);

		const block_G3_bar_line_text = document.querySelector('.bar_S3 p');
		block_G3_bar_line_text.textContent = Math.round(block_G3_bar) + '%';

		let block_G4_bar = 100 / G_4_length * G_4_summ;
		const block_G4_bar_line = document.querySelector('.bar_G4');
		block_G4_bar_line.style.width = block_G4_bar + '%';
		block_G4_bar_line.style.background = colorFunc(block_G4_bar);

		const block_G4_bar_line_text = document.querySelector('.bar_G4 p');
		block_G4_bar_line_text.textContent = Math.round(block_G4_bar) + '%';

		let block_G5_bar = 100 / G_5_length * G_5_summ;
		const block_G5_bar_line = document.querySelector('.bar_G5');
		block_G5_bar_line.style.width = block_G5_bar + '%';
		block_G5_bar_line.style.background = colorFunc(block_G5_bar);

		const block_G5_bar_line_text = document.querySelector('.bar_G5 p');
		block_G5_bar_line_text.textContent = Math.round(block_G5_bar) + '%';

		let block_G6_bar = 100 / G_6_length * G_6_summ;
		const block_G6_bar_line = document.querySelector('.bar_G6');
		block_G6_bar_line.style.width = block_G6_bar + '%';
		block_G6_bar_line.style.background = colorFunc(block_G6_bar);

		const block_G6_bar_line_text = document.querySelector('.bar_G6 p');
		block_G6_bar_line_text.textContent = Math.round(block_G6_bar) + '%';

		let block_G7_bar = 100 / G_7_length * G_7_summ;
		const block_G7_bar_line = document.querySelector('.bar_G7');
		block_G7_bar_line.style.width = block_G7_bar + '%';
		block_G7_bar_line.style.background = colorFunc(block_G7_bar);

		const block_G7_bar_line_text = document.querySelector('.bar_G7 p');
		block_G7_bar_line_text.textContent = Math.round(block_G7_bar) + '%';

		

		miniBarFunc();



		//ESG block
		let block_E_calc = 
		0.8 * ((1 / E_1_length * E_1_summ + 1 / E_2_length * E_2_summ + 1 / E_3_length * E_3_summ + 1 / E_5_length * E_5_summ) / 4) + 0.2 * (1 / E_4_length) *  E_4_summ;

		let block_S_calc = 0;
		if (params.block_S['S4']) {
			let S_4_length = params.block_S['S4'].length;
			let S_4_summ = params.block_S['S4'].summ;

			block_S_calc = 
			0.8 * ((1 / S_1_length * S_1_summ + 1 / S_2_length * S_2_summ + 1 / S_3_length * S_3_summ + 1 / S_4_length * S_4_summ + 1 / S_5_length * S_5_summ) / 5) + 0.2 * (1 / S_6_length) *  S_6_summ;

		} else {
			
			block_S_calc = 
			0.8 * ((1 / S_1_length * S_1_summ + 1 / S_2_length * S_2_summ + 1 / S_3_length * S_3_summ + 1 / S_5_length * S_5_summ) / 4) + 0.2 * (1 / S_6_length) *  S_6_summ;

		}

		let block_G_calc = 0;
		if (params.block_S['G8']) {
			let G_8_length = params.block_S['G8'].length;
			let G_8_summ = params.block_S['G8'].summ;

			block_G_calc = 
			(1 / G_1_length * G_1_summ + 1 / G_2_length * G_2_summ + 1 / G_3_length * G_3_summ + 1 / G_4_length * G_4_summ + 1 / G_5_length * G_5_summ + 1 / G_6_length * G_6_summ + 1 / G_7_length * G_7_summ + G_8_length * G_8_summ) / 8;
			
		} else {
			
			block_G_calc = 
			(1 / G_1_length * G_1_summ + 1 / G_2_length * G_2_summ + 1 / G_3_length * G_3_summ + 1 / G_4_length * G_4_summ + 1 / G_5_length * G_5_summ + 1 / G_6_length * G_6_summ + 1 / G_7_length * G_7_summ) / 7;

		}

		let ESG = 1 / 3 * (block_E_calc + block_S_calc + block_G_calc);

		diagrammFunc(block_E_calc, block_S_calc, block_G_calc, ESG);
	}
	const colorFunc = (value) => {
		const lowColor = '#e4f0dc',
					lowMidColor = '#cadfb8',
					midColor = '#b1d095',
					regColor = '#b1d095',
					hightColor = '#7eab56',
					verHightColor = '#608041',
					maxColor = '#3f5727';

		if (value < 15) {
			return lowColor;
		} else if (value >= 15 && value < 30) {
			return lowMidColor;
		} else if (value >= 30 && value < 45) {
			return midColor;
		} else if (value >= 45 && value < 60) {
			return regColor; 
		} else if (value >= 60 && value < 75) {
			return hightColor;
		} else if (value >= 75 && value < 90) {
			return verHightColor;
		} else if (value > 90) {
			return maxColor;
		}
	}
	const textRatingFunc = (value) => {
		const lowText = `
						<b>Категория C - Начальный</b>
						<p>
							Компания демонстрирует слабый уровень интеграции повестки ESG в свою деятельность и качества соблюдения соответствующих практик
						</p>
					`,
					lowMidText = `
					<b>Категория B - Развивающийся</b>
					<p>
						Компания демонстрирует умеренно слабый уровень интеграции повестки ESG в свою деятельность и качества соблюдения соответствующих практик
					</p>
				`,
					midText = `
					<b>Категория B - Развивающийся</b>
					<p>
						Компания демонстрирует средний уровень интеграции повестки ESG в свою деятельность и качества соблюдения соответствующих практик
					</p>
				`,
					regText = `
					<b>Категория B - Развивающийся</b>
					<p>
						Компания демонстрирует достаточный уровень интеграции повестки ESG в свою деятельность компании и качества соблюдения соответствующих практик
					</p>
				`,
					hightText = `
					<b>Категория А - Продвинутый</b>
					<p>
						Компания демонстрирует высокий уровень интеграции повестки ESG в свою деятельность и качества соблюдения соответствующих практик
					</p>
				`,

					verHightText = `
					<b>Категория А - Продвинутый</b>
					<p>
						Компания демонстрирует очень высокий уровень интеграции повестки ESG в свою деятельность и качества соблюдения соответствующих практик
					</p>
				`,

					maxText = `
					<b>Категория А - Продвинутый</b>
					<p>
						Компания демонстрирует максимальный уровень интеграции повестки ESG в свою деятельность и качества соблюдения соответствующих практик
					</p>
				`;


		if (value < 15) {
			return lowText;
		} else if (value >= 15 && value < 30) {
			return lowMidText;
		} else if (value >= 30 && value < 45) {
			return midText;
		} else if (value >= 45 && value < 60) {
			return regText; 
		} else if (value >= 60 && value < 75) {
			return hightText;
		} else if (value >= 75 && value < 90) {
			return verHightText;
		} else if (value > 90) {
			return maxText;
		}
	}
	
	const miniBarFunc = () => {
		
		let questions = params.block_E;
		let questionsS = params.block_S;
		let questionsG = params.block_G;

		for (item in questions) {
			const bar = document.querySelector(`#bar_${item}`);
			if (bar) {
				for (answer in questions[item].answers) {
					let newBar = document.createElement('div');
					newBar.classList.add('mini-bar');

					newBar.innerHTML = `
						<div class="left">
							<div class="bar">
								<div class="inner" style="background: ${colorFunc(+questions[item].answers[answer] * 100)};width: ${+questions[item].answers[answer] * 100}%"><p>${+questions[item].answers[answer] * 100}%</p></div>
							</div>
						</div>
						<div class="right">
							${questions[item].answers_name[answer]}
						</div> 
					`;
					bar.appendChild(newBar)
				}
			}
			
		}

		for (item in questionsS) {
			const bar = document.querySelector(`#bar_${item}`);
			if (bar) {
				for (answer in questionsS[item].answers) {
					let newBar = document.createElement('div');
					newBar.classList.add('mini-bar');
					newBar.innerHTML = `
						<div class="left">
							<div class="bar">
								<div class="inner" style="background: ${colorFunc(+questionsS[item].answers[answer] * 100)};width: ${+questionsS[item].answers[answer] * 100}%"><p>${+questionsS[item].answers[answer] * 100}%</p></div>
							</div>
						</div>
						<div class="right">
							${questionsS[item].answers_name[answer]}
						</div> 
					`;
					bar.appendChild(newBar)
				}
			}
			
		}

		for (item in questionsG) {
			const bar = document.querySelector(`#bar_${item}`);
			if (bar) {
				for (answer in questionsG[item].answers) {
					let newBar = document.createElement('div');
					newBar.classList.add('mini-bar');

					newBar.innerHTML = `
						<div class="left">
							<div class="bar">
								<div class="inner" style="background: ${colorFunc(+questionsG[item].answers[answer] * 100)};width: ${+questionsG[item].answers[answer] * 100}%"><p>${+questionsG[item].answers[answer] * 100}%</p></div>
							</div>
						</div>
						<div class="right">
							${questionsG[item].answers_name[answer]}
						</div> 
					`;
					bar.appendChild(newBar)
				}
			}
			
		}
		
	}
	
	

	const diagrammFunc = (E_calc, S_calc, G_calc, ESG_calc) => {
		console.log(`блок Е% ${E_calc}`)
		console.log(`блок S% ${S_calc}`)
		console.log(`блок G% ${G_calc}`)
		console.log(`блок ЕSG% ${ESG_calc}`)
		/* E_calc = 0.23;
		S_calc = 0.41;
		G_calc = 0.72;
		ESG_calc = 0.62; */
		

		const chartAll_E = document.getElementById('chart_all_E');
		const chartAll_S = document.getElementById('chart_all_S');
		const chartAll_G = document.getElementById('chart_all_G');
		const chartAll_ESG = document.getElementById('chart_all_ESG');
		const chartText_ESG = document.getElementById('list_ESG');
		chartText_ESG.innerHTML = textRatingFunc(ESG_calc * 100);
		
		chartAll_E.textContent = E_calc.toFixed(2);
		chartAll_S.textContent = S_calc.toFixed(2);
		chartAll_G.textContent = G_calc.toFixed(2);
		chartAll_ESG.textContent = ESG_calc.toFixed(2);


		Chart.register(ChartDataLabels);
		Chart.register(DoughnutLabel);

		const E_block_labels = [];
		const E_block_values = [];
		const E_block_colors = [];

		const chartList_E = document.querySelectorAll('#list_E .result-item');
		const chartList_S = document.querySelectorAll('#list_S .result-item');
		const chartList_G = document.querySelectorAll('#list_G .result-item');
		
		for (let key in params.block_E) {
			let middle = params.block_E[key].summ / params.block_E[key].length;
			E_block_labels.push(key);
			if (middle == 0) {
				E_block_values.push(0.1);
			} else {
				E_block_values.push(middle.toFixed(2));
			}
			chartList_E.forEach(e => {
				if (e.dataset.id == key) {
					e.style.display = 'flex';
					const color = e.querySelector('.color');
					color.style.background = colorFunc(middle * 100);
					E_block_colors.push(colorFunc(middle * 100));
				}
			})
			
		}

		const S_block_labels = [];
		const S_block_values = [];
		const S_block_colors = [];
		for (let key in params.block_S) {
			let middle = params.block_S[key].summ / params.block_S[key].length;
			S_block_labels.push(key);
			if (middle == 0) {
				S_block_values.push(0.1);
			} else {
				S_block_values.push(middle.toFixed(2));
			}
			chartList_S.forEach(e => {
				if (e.dataset.id == key) {
					e.style.display = 'flex';
					const color = e.querySelector('.color');
					color.style.background = colorFunc(middle * 100);
					S_block_colors.push(colorFunc(middle * 100));

				}
			})
		}

		const G_block_labels = [];
		const G_block_values = [];
		const G_block_colors = [];
		for (let key in params.block_G) {
			let middle = params.block_G[key].summ / params.block_G[key].length;
			G_block_labels.push(key);
			if (middle == 0) {
				G_block_values.push(0.1);
			} else {
				G_block_values.push(middle.toFixed(2));
			}
			chartList_G.forEach(e => {
				if (e.dataset.id == key) {
					e.style.display = 'flex';
					const color = e.querySelector('.color');
					color.style.background = colorFunc(middle * 100);
					G_block_colors.push(colorFunc(middle * 100));

				}
			})
		}

		const data_E = {
			type: 'doughnut',
			data: {
					labels: E_block_labels,
					datasets: [{
							data: E_block_values,
							backgroundColor: E_block_colors,
							offset: 2,
							borderWidth: 0,
							spacing: 1,
							rotation: -90,
							circumference: -180,
							cutout: 75,
							layout: {
								padding: 0,
							},
					}]
			},
			options: {
				tooltips: {
						enabled: true 
				},
				plugins: {
						datalabels: {
								color: '#fff',
								textAlign: 'center',
								font: {
										lineHeight: 1.6,
										size: 20,
										weight: 600
								},
								
						}
				}
			}
		};
		const data_S = {
			type: 'doughnut',
			data: {
					labels: S_block_labels,
					datasets: [{
							data: S_block_values,
							backgroundColor: S_block_colors,
							offset: 3,
							borderWidth: 0,
							spacing: 0,
							rotation: -90,
							circumference: -180,
							cutout: 75,
							layout: {
								padding: 40,
							},
					}]
			},
			options: {
				tooltips: {
						enabled: true 
				},
				plugins: {
						datalabels: {
								color: '#fff',
								textAlign: 'center',
								font: {
										lineHeight: 1.6,
										size: 20,
										weight: 600
								},
								
						}
				}
			}
		};
		const data_G = {
			type: 'doughnut',
			data: {
					labels: G_block_labels,
					datasets: [{
							data: G_block_values,
							backgroundColor: G_block_colors,
							offset: 3,
							borderWidth: 0,
							spacing: 0,
							rotation: -90,
							circumference: -180,
							cutout: 75,
							layout: {
								padding: 40,
							},
					}]
			},
			options: {
				tooltips: {
						enabled: true 
				},
				plugins: {
						datalabels: {
								color: '#fff',
								textAlign: 'center',
								font: {
										lineHeight: 1.6,
										size: 20,
										weight: 600
								},
								
						},
				}
			}
		};
		
		const data_ESG = {
			type: 'doughnut',
			data: {
					labels: ['Блок Е', 'Блок S', 'Блок G'],
					datasets: [{
							data: [E_calc.toFixed(2), S_calc.toFixed(2), G_calc.toFixed(2)],
							backgroundColor: [colorFunc(E_calc * 100), colorFunc(S_calc * 100), colorFunc(G_calc * 100)],
							offset: 0,
							borderWidth: 2,
							borderColor: ['#fff','#fff','#fff'],
							spacing: 0,
							cutout: 85,
							layout: {
								padding: 40,
							},
					}]
			},
			options: {
				title: {
					display: false,
				},
				tooltips: {
						enabled: false 
				},
				legend: {
					display: false,
				},
				plugins: {
					legend: {
						display: false,
					},
						datalabels: {
								color: '#fff',
								textAlign: 'center',
								font: {
										lineHeight: 1.6,
										size: 20,
										weight: 600
								},
								
						},
				}
			}
		};
		const ctx_E = document.getElementById('chart_E');
		const ctx_S = document.getElementById('chart_S');
		const ctx_G = document.getElementById('chart_G');
		const ctx_ESG = document.getElementById('chart_ESG');
		new Chart(ctx_E, data_E);
		new Chart(ctx_S, data_S);
		new Chart(ctx_G, data_G);
		new Chart(ctx_ESG, data_ESG);


		const inputName = document.querySelector('.inputForm_name');
		const inputCat = document.querySelector('.inputForm_cat');
		const inputInd = document.querySelector('.inputForm_ind');
		const inputE = document.querySelector('.inputForm_E');
		const inputE_ALL = document.querySelector('.inputForm_E_ALL');
		const inputS = document.querySelector('.inputForm_S');
		const inputS_ALL = document.querySelector('.inputForm_S_ALL');
		const inputG = document.querySelector('.inputForm_G');
		const inputG_ALL = document.querySelector('.inputForm_G_ALL');
		const ESGVal = document.querySelector('.ESGVal');

		inputName.value = `Компания: ${params.company.name}`;
		if (params.company.finance === true) {
			inputCat.value = `Категория: Финансовые организации`;
		} else {
			inputCat.value = `Категория: Нефинансовые организации`;
		}
		
		inputInd.value = `Отрасль: ${params.company.industry}`;
		let E = '';
		let E_ALL = '';
		for (let item in params.block_E) {
			for (let inner_item in params.block_E[item].answers) {
				E += `${inner_item} - ${params.block_E[item].answers[inner_item]} | `;
			}
			E_ALL += `Балл блока ${item}: ${(params.block_E[item].summ / params.block_E[item].length).toFixed(2)}, `;
		}
		inputE_ALL.value = E_ALL;
		inputE.value = `
		Список вопросов блока Е:
			${E}
		`;
		let S = '';
		let S_ALL = '';
		for (let item in params.block_S) {
			for (let inner_item in params.block_S[item].answers) {
				S += `${inner_item} - ${params.block_S[item].answers[inner_item]} | `;
			}
			S_ALL += `Балл блока ${item}: ${(params.block_S[item].summ / params.block_S[item].length).toFixed(2)}, `;
		}
		
		inputS_ALL.value = S_ALL;
		inputS.value = `
		Список вопросов блока S:
			${S}
		`;
		let G = '';
		let G_ALL = '';
		for (let item in params.block_G) {
			for (let inner_item in params.block_G[item].answers) {
				G += `${inner_item} - ${params.block_G[item].answers[inner_item]} | `;
			}
			G_ALL += `Балл блока ${item}: ${(params.block_G[item].summ / params.block_G[item].length).toFixed(2)}, `;
		}
		inputG_ALL.value = G_ALL;
		inputG.value = `
		Список вопросов блока G:
			${G}
		`;
		ESGVal.value = `
		Рейтинг блока E: ${E_calc.toFixed(2)},
		Рейтинг блока S: ${S_calc.toFixed(2)},
		Рейтинг блока G: ${G_calc.toFixed(2)},
		Рейтинг ESG: ${ESG_calc.toFixed(2)}
		`
		$('.sendFormBtn').trigger('click');

	}

		

	
	//another
	//popup
	$('.quote-toggle').on('click', function () {
		$('.overlay').fadeIn(300);
		$('.popup.popup-quote').fadeIn(300);
		$('.popup.popup-quote .title span').text($(this).parent().find('b').html());
		$('.popup.popup-quote .content').html($(this).find('.quote').html());
	});
	$('.burger').on('click', function() {
		$('.tog').slideDown(200);
	});
	$('.header .close').on('click', function() {
		$('.tog').slideUp(200);
	})
	$('.overlay').on('click', function () {
		$(this).fadeOut(300);
		$('.popup').fadeOut(300);
	});
	$('.popup .close').on('click', function () {
		$('.overlay').fadeOut(300);
		$('.popup').fadeOut(300);
	});
	$('.moar ').on('click', function() {
		$(this).next().slideToggle(300);
		$(this).children('div').toggleClass('active')
	});

	$("#company_name").suggestions({
		token: "6b5e2009699adff2a4d0d6c946c8caf0ed60fa63",
		type: "PARTY",
		/* Вызывается, когда пользователь выбирает одну из подсказок */
		onSelect: function(suggestion) {
				console.log(suggestion);
		}
	});
}); //end


