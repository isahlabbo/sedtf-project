<?php

namespace Modules\Student\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Student\Entities\QualificationTypeSubject;

class QualificationTypeSubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ([1,2,3] as $qualifictaionTypeId) {
            switch ($qualifictaionTypeId) {
                case '1':
                    foreach ($this->neco() as $key => $value) {
                       QualificationTypeSubject::firstOrCreate([
                           'qualification_type_id'=>$qualifictaionTypeId,
                           'subject'=>$value,
                           ]);
                    }
                    break;
                case '2':
                    foreach ($this->waec() as $key => $value) {
                        QualificationTypeSubject::firstOrCreate([
                            'qualification_type_id'=>$qualifictaionTypeId,
                            'subject'=>$value,
                            ]);
                    }
                    break;    
                case '3':
                    foreach ($this->nabteb() as $key => $value) {
                        QualificationTypeSubject::firstOrCreate([
                            'qualification_type_id'=>$qualifictaionTypeId,
                            'subject'=>$value,
                            ]);
                    }
                    break;
                default:
                    # code...
                    break;
            }
        }
        
    }

    public function neco()
    {
        return [
            'Additional General Science',
            'Additional Mathematics',
            'Agricultural Science',
            'Applied Mathematics',
            'Biology',
            'Food Science',
            'Botany',
            'Chemistry',
            'General Biology',
            'General Science',
            'Geology',
            'Health Science',
            'Human Biology',
            'Hygiene',
            'Integrated Science',
            'Mathematics',
            'Physics',
            'Pure and Applied Mathematics',
            'Rural Biology',
            'Rural Science',
            'Statistics',
            'Zoology',
            'Geography',
            'English Language',
            'Literature in English',
            'History',
            'Fine and Applied Arts',
            'French',
            'Igbo',
            'Other Nigerian Languages',
            'Music',
            'Government',
            'Food and Nutrition',
            'Islamic Religious Studies',
            'Christian Religious Studies',
        ];
    }

    public function waec()
    {
        return [
            'ARABIC',
            'AGRICULTURAL SCIENCE',
            'ANIMAL HUSBANDRY',
           ' APPLIED ELECTRICITY OR BASIC ELECTRICITY',
            'AUTO BODY REPAIRS AND SPRAY PAINTING',
            'AUTO ELECTRICAL WORK WAEC',
            'AUTO MECHANICAL WORK',
            'AUTO MECHANICS',
            'AUTO PARTS MERCHANDISING',
            'BASKETRY',
            'BIOLOGY',
            'BLOCKLAYING, BRICKLAYING AND CONCRETING',
            'BOOK KEEPING',
            'BUILDING CONSTRUCTION',
            'BUSINESS MANAGEMENT',
            'CAPENTRY AND JOINERY',
            'CATERING CRAFT PRACTICE',
            'CERAMICS',
            'CHEMISTRY',
            'CHRISTIAN RELIGIOUS STUDIES',
            'CIVIC EDUCATION',
            'CLERICAL OFFICE DUTIES',
            'CLOTHING AND TEXTILES',
            'COMMERCE',
            'COMPUTER STUDIES',
            'COSMETOLOGY',
            'CROP HUSBANDRY AND HORTICULTURE',
            'DATA PROCESSING',
            'DYEING & BLEACHING',
            'ECONOMICS',
            'EDO',
            'EFIK',
            'ELECTRICAL INSTALLATION AND MAINTENANCE WORK',
            'ELECTRONICS OR BASIC ELECTRONICS',
            'ENGLISH LANGUAGE',
            'FINANCIAL ACCOUNTING',
            'FINANCIAL ACCOUNTS',
            'FISHERIES',
            'FOODS AND NUTRITION',
            'FORESTRY',
            'FRENCH',
            'FURNITURE MAKING',
            'FURTHER MATHEMATICS OR MATHEMATICS',
            'GARMENT MAKING',
            'GENERAL AGRICULTURE',
            'GENERAL KNOWLEDGE IN ART',
            'GENERAL MATHEMATICS OR MATHEMATICS',
            'GEOGRAPHY',
            'GHANAIAN LANGUAGES',
            'GOVERNMENT',
            'GRAPHIC DESIGN',
            'GSM PHONES MAINTENANCE AND REPAIRS',
            'HAUSA',
            'HEALTH EDUCATION OR HEALTH SCIENCE',
            'HISTORY',
            'HOME MANAGEMENT',
            'IBIBIO',
            'IGBO',
            'INFORMATION AND COMMUNICATION TECHNOLOGY',
            'INSURANCE',
            'INTEGRATED SCIENCE',
            'ISLAMIC RELIGIOUS STUDIES',
            'JEWELLERY',
            'LEATHER GOODS',
            'LEATHERWORK',
            'LITERATURE IN ENGLISH',
            'MACHINE WOODWORKING',
            'MARKETING',
            'METALWORK',
            'MINING',
            'MUSIC',
            'OFFICE PRACTICE',
            'PAINTING AND DECORATING',
            'PHOTOGRAPHY',
            'PHYSICAL EDUCATION',
            'PHYSICS',
            'PICTURE MAKING',
           ' PLUMBING AND PIPE FITTING',
            'PRINCIPLES OF COST ACCOUNTING',
            'PRINTING CRAFT PRACTICE',
            'RADIO,TELEVISION AND ELECTRONICS WORKS',
            'REFRIGERATION AND AIR CONDITIONING',
            'SALESMANSHIP',
            'SCULPTURE',
            'SHORTHAND',
            'SOCIAL STUDIES',
            'STORE KEEPING',
            'STORE MANAGEMENT',
            'TECHNICAL DRAWING',
            'TEXTILES',
            'TOURISM',
            'TYPEWRITING',
            'UPHOLSTERY',
            'VISUAL ART',
            'WELDING AND FABRICATION ENGINEERING CRAFT PRACTICE',
            'WEST AFRICAN TRADITIONAL RELIGION',
            'WOODWORK',
            'YORUBA',
        ];
    }

    public function nabteb()
    {
        return [
            
            'Mathematics',
            'Animal Husbandry',
            'Economics',
            'Physics',
            'Chemistry',
            'Biology',
            'Literature In English',
            'Agricultural Science',
            'Civic Education',
            'Geography',
            'General Metal Work',
            'General Wood Work',
            'Building-Engineering Drawing',
            'Basic Electricity',
            'Agricultural Equipment and Implement Mechanic Works',
            'Appliance Maintenance',
            'Automobile Electrical Works',
            'Electrical Inst. and Maintenance Work',
            'Electronics Works',
            'Fabrication and Welding',
            'Fisheries',
            'Foundry Craft Practice',
            'Instrument Mechanics Works',
            'Light Vehicle Body Repair Work',
            'Marine Engineering Craft',
            'Mechanical Engineering Craft Practice',
            'Motor Vehicle Mechanics Work',
            'Photography',
            'Refrigeration and Air-Conditioning Work',
            'Ship Building Craft Practice',
            'Vehicle Body Building',
            'Bricklaying, Blocklaying and Concreting',
            'Carpentry and Joinery',
            'Draughtsmanship Craft Practice',
            'Furniture Making',
            'Machine Wood Work',
            'Painting and Decorating',
            'Plumbing and Pipe Fitting',
            'Typewriting 35 wpm',
            'Shorthand 80 wpm',
            'Office Practice',
            'Financial Accounting',
            'Salesmanship',
            'Commerce',
            'Basic Catering and Food Service',
            'Ceramics',
            'Cosmetology',
            'Graphics Art',
            'Ladies Garment Making',
            'Leather Trades',
            'Men’s Garment Making',
            'Printing Craft Practice',
            'Textile Trades',
            'Tourism'
        ];
    }
}
