<?php

/*
    Copyright (c) 2012 - 2015, Open Source Solutions Limited, Dublin, Ireland
    All rights reserved.

    Contact: Barry O'Donovan - barry (at) opensolutions (dot) ie
             http://www.opensolutions.ie/

    This file is part of the OSS_SNMP package.

    Redistribution and use in source and binary forms, with or without
    modification, are permitted provided that the following conditions are met:

        * Redistributions of source code must retain the above copyright
          notice, this list of conditions and the following disclaimer.
        * Redistributions in binary form must reproduce the above copyright
          notice, this list of conditions and the following disclaimer in the
          documentation and/or other materials provided with the distribution.
        * Neither the name of Open Source Solutions Limited nor the
          names of its contributors may be used to endorse or promote products
          derived from this software without specific prior written permission.

    THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
    ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
    WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
    DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY
    DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
    (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
    LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
    ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
    (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
    SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
*/

namespace OSS_SNMP\MIBS;

/**
 * A class for performing SNMP V2 queries on generic devices
 *
 * @copyright Copyright (c) 2012 - 2015, Open Source Solutions Limited, Dublin, Ireland
 * @author Barry O'Donovan <barry@opensolutions.ie>
 */
class MAU extends \OSS_SNMP\MIB
{
    const OID_TYPE                  = '.1.3.6.1.2.1.26.2.1.1.3';


    /**
     * Constant for MAU type: AUI
     * @see types()
     */
    const TYPE_AUI = '.1.3.6.1.2.1.26.4.1';

    /**
     * Constant for MAU type: 10Base5
     * @see types()
     */
    const TYPE_10BASE5 = '.1.3.6.1.2.1.26.4.2';

    /**
     * Constant for MAU type: Foirl
     * @see types()
     */
    const TYPE_FOIRL = '.1.3.6.1.2.1.26.4.3';

    /**
     * Constant for MAU type: 10Base2
     * @see types()
     */
    const TYPE_10BASE2 = '.1.3.6.1.2.1.26.4.4';

    /**
     * Constant for MAU type: 10BaseT
     * @see types()
     */
    const TYPE_10BASET = '.1.3.6.1.2.1.26.4.5';

    /**
     * Constant for MAU type: 10BaseFP
     * @see types()
     */
    const TYPE_10BASEFP = '.1.3.6.1.2.1.26.4.6';

    /**
     * Constant for MAU type: 10BaseFB
     * @see types()
     */
    const TYPE_10BASEFB = '.1.3.6.1.2.1.26.4.7';

    /**
     * Constant for MAU type: 10BaseFL
     * @see types()
     */
    const TYPE_10BASEFL = '.1.3.6.1.2.1.26.4.8';

    /**
     * Constant for MAU type: 10Broad36
     * @see types()
     */
    const TYPE_10BROAD36 = '.1.3.6.1.2.1.26.4.9';

    /**
     * Constant for MAU type: 10BaseTHD
     * @see types()
     */
    const TYPE_10BASETHD = '.1.3.6.1.2.1.26.4.10';

    /**
     * Constant for MAU type: 10BaseTFD
     * @see types()
     */
    const TYPE_10BASETFD = '.1.3.6.1.2.1.26.4.11';

    /**
     * Constant for MAU type: 10BaseFLHD
     * @see types()
     */
    const TYPE_10BASEFLHD = '.1.3.6.1.2.1.26.4.12';

    /**
     * Constant for MAU type: 10BaseFLFD
     * @see types()
     */
    const TYPE_10BASEFLFD = '.1.3.6.1.2.1.26.4.13';

    /**
     * Constant for MAU type: 100BaseT4
     * @see types()
     */
    const TYPE_100BASET4 = '.1.3.6.1.2.1.26.4.14';

    /**
     * Constant for MAU type: 100BaseTXHD
     * @see types()
     */
    const TYPE_100BASETXHD = '.1.3.6.1.2.1.26.4.15';

    /**
     * Constant for MAU type: 100BaseTXFD
     * @see types()
     */
    const TYPE_100BASETXFD = '.1.3.6.1.2.1.26.4.16';

    /**
     * Constant for MAU type: 100BaseFXHD
     * @see types()
     */
    const TYPE_100BASEFXHD = '.1.3.6.1.2.1.26.4.17';

    /**
     * Constant for MAU type: 100BaseFXFD
     * @see types()
     */
    const TYPE_100BASEFXFD = '.1.3.6.1.2.1.26.4.18';

    /**
     * Constant for MAU type: 100BaseT2HD
     * @see types()
     */
    const TYPE_100BASET2HD = '.1.3.6.1.2.1.26.4.19';

    /**
     * Constant for MAU type: 100BaseT2FD
     * @see types()
     */
    const TYPE_100BASET2FD = '.1.3.6.1.2.1.26.4.20';

    /**
     * Constant for MAU type: 1000BaseXHD
     * @see types()
     */
    const TYPE_1000BASEXHD = '.1.3.6.1.2.1.26.4.21';

    /**
     * Constant for MAU type: 1000BaseXFD
     * @see types()
     */
    const TYPE_1000BASEXFD = '.1.3.6.1.2.1.26.4.22';

    /**
     * Constant for MAU type: 1000BaseLXHD
     * @see types()
     */
    const TYPE_1000BASELXHD = '.1.3.6.1.2.1.26.4.23';

    /**
     * Constant for MAU type: 1000BaseLXFD
     * @see types()
     */
    const TYPE_1000BASELXFD = '.1.3.6.1.2.1.26.4.24';

    /**
     * Constant for MAU type: 1000BaseSXHD
     * @see types()
     */
    const TYPE_1000BASESXHD = '.1.3.6.1.2.1.26.4.25';

    /**
     * Constant for MAU type: 1000BaseSXFD
     * @see types()
     */
    const TYPE_1000BASESXFD = '.1.3.6.1.2.1.26.4.26';

    /**
     * Constant for MAU type: 1000BaseCXHD
     * @see types()
     */
    const TYPE_1000BASECXHD = '.1.3.6.1.2.1.26.4.27';

    /**
     * Constant for MAU type: 1000BaseCXFD
     * @see types()
     */
    const TYPE_1000BASECXFD = '.1.3.6.1.2.1.26.4.28';

    /**
     * Constant for MAU type: 1000BaseTHD
     * @see types()
     */
    const TYPE_1000BASETHD = '.1.3.6.1.2.1.26.4.29';

    /**
     * Constant for MAU type: 1000BaseTFD
     * @see types()
     */
    const TYPE_1000BASETFD = '.1.3.6.1.2.1.26.4.30';

    /**
     * Constant for MAU type: 10GigBaseX
     * @see types()
     */
    const TYPE_10GIGBASEX = '.1.3.6.1.2.1.26.4.31';

    /**
     * Constant for MAU type: 10GigBaseLX4
     * @see types()
     */
    const TYPE_10GIGBASELX4 = '.1.3.6.1.2.1.26.4.32';

    /**
     * Constant for MAU type: 10GigBaseR
     * @see types()
     */
    const TYPE_10GIGBASER = '.1.3.6.1.2.1.26.4.33';

    /**
     * Constant for MAU type: 10GigBaseER
     * @see types()
     */
    const TYPE_10GIGBASEER = '.1.3.6.1.2.1.26.4.34';

    /**
     * Constant for MAU type: 10GigBaseLR
     * @see types()
     */
    const TYPE_10GIGBASELR = '.1.3.6.1.2.1.26.4.35';

    /**
     * Constant for MAU type: 10GigBaseSR
     * @see types()
     */
    const TYPE_10GIGBASESR = '.1.3.6.1.2.1.26.4.36';

    /**
     * Constant for MAU type: 10GigBaseW
     * @see types()
     */
    const TYPE_10GIGBASEW = '.1.3.6.1.2.1.26.4.37';

    /**
     * Constant for MAU type: 10GigBaseEW
     * @see types()
     */
    const TYPE_10GIGBASEEW = '.1.3.6.1.2.1.26.4.38';

    /**
     * Constant for MAU type: 10GigBaseLW
     * @see types()
     */
    const TYPE_10GIGBASELW = '.1.3.6.1.2.1.26.4.39';

    /**
     * Constant for MAU type: 10GigBaseSW
     * @see types()
     */
    const TYPE_10GIGBASESW = '.1.3.6.1.2.1.26.4.40';

    /**
     * Constant for MAU type: 10GigBaseCX4
     * @see types()
     */
    const TYPE_10GIGBASECX4 = '.1.3.6.1.2.1.26.4.41';

    /**
     * Constant for MAU type: 2BaseTL
     * @see types()
     */
    const TYPE_2BASETL = '.1.3.6.1.2.1.26.4.42';

    /**
     * Constant for MAU type: 10PassTS
     * @see types()
     */
    const TYPE_10PASSTS = '.1.3.6.1.2.1.26.4.43';

    /**
     * Constant for MAU type: 100BaseBX10D
     * @see types()
     */
    const TYPE_100BASEBX10D = '.1.3.6.1.2.1.26.4.44';

    /**
     * Constant for MAU type: 100BaseBX10U
     * @see types()
     */
    const TYPE_100BASEBX10U = '.1.3.6.1.2.1.26.4.45';

    /**
     * Constant for MAU type: 100BaseLX10
     * @see types()
     */
    const TYPE_100BASELX10 = '.1.3.6.1.2.1.26.4.46';

    /**
     * Constant for MAU type: 1000BaseBX10D
     * @see types()
     */
    const TYPE_1000BASEBX10D = '.1.3.6.1.2.1.26.4.47';

    /**
     * Constant for MAU type: 1000BaseBX10U
     * @see types()
     */
    const TYPE_1000BASEBX10U = '.1.3.6.1.2.1.26.4.48';

    /**
     * Constant for MAU type: 1000BaseLX10
     * @see types()
     */
    const TYPE_1000BASELX10 = '.1.3.6.1.2.1.26.4.49';

    /**
     * Constant for MAU type: 1000BasePX10D
     * @see types()
     */
    const TYPE_1000BASEPX10D = '.1.3.6.1.2.1.26.4.50';

    /**
     * Constant for MAU type: 1000BasePX10U
     * @see types()
     */
    const TYPE_1000BASEPX10U = '.1.3.6.1.2.1.26.4.51';

    /**
     * Constant for MAU type: 1000BasePX20D
     * @see types()
     */
    const TYPE_1000BASEPX20D = '.1.3.6.1.2.1.26.4.52';

    /**
     * Constant for MAU type: 1000BasePX20U
     * @see types()
     */
    const TYPE_1000BASEPX20U = '.1.3.6.1.2.1.26.4.53';

    /**
     * Constant for MAU type: 10GbaseT
     * @see types()
     */
    const TYPE_10GBASET = '.1.3.6.1.2.1.26.4.54';

    /**
     * Constant for MAU type: 10GbaseLRM
     * @see types()
     */
    const TYPE_10GBASELRM = '.1.3.6.1.2.1.26.4.55';

    /**
     * Constant for MAU type: 1000baseKX
     * @see types()
     */
    const TYPE_1000BASEKX = '.1.3.6.1.2.1.26.4.56';

    /**
     * Constant for MAU type: 10GbaseKX4
     * @see types()
     */
    const TYPE_10GBASEKX4 = '.1.3.6.1.2.1.26.4.57';

    /**
     * Constant for MAU type: 10GbaseKR
     * @see types()
     */
    const TYPE_10GBASEKR = '.1.3.6.1.2.1.26.4.58';

    /**
     * Constant for MAU type: 10G1GbasePRXD1
     * @see types()
     */
    const TYPE_10G1GBASEPRXD1 = '.1.3.6.1.2.1.26.4.59';

    /**
     * Constant for MAU type: 10G1GbasePRXD2
     * @see types()
     */
    const TYPE_10G1GBASEPRXD2 = '.1.3.6.1.2.1.26.4.60';

    /**
     * Constant for MAU type: 10G1GbasePRXD3
     * @see types()
     */
    const TYPE_10G1GBASEPRXD3 = '.1.3.6.1.2.1.26.4.61';

    /**
     * Constant for MAU type: 10G1GbasePRXU1
     * @see types()
     */
    const TYPE_10G1GBASEPRXU1 = '.1.3.6.1.2.1.26.4.62';

    /**
     * Constant for MAU type: 10G1GbasePRXU2
     * @see types()
     */
    const TYPE_10G1GBASEPRXU2 = '.1.3.6.1.2.1.26.4.63';

    /**
     * Constant for MAU type: 10G1GbasePRXU3
     * @see types()
     */
    const TYPE_10G1GBASEPRXU3 = '.1.3.6.1.2.1.26.4.64';

    /**
     * Constant for MAU type: 10GbasePRD1
     * @see types()
     */
    const TYPE_10GBASEPRD1 = '.1.3.6.1.2.1.26.4.65';

    /**
     * Constant for MAU type: 10GbasePRD2
     * @see types()
     */
    const TYPE_10GBASEPRD2 = '.1.3.6.1.2.1.26.4.66';

    /**
     * Constant for MAU type: 10GbasePRD3
     * @see types()
     */
    const TYPE_10GBASEPRD3 = '.1.3.6.1.2.1.26.4.67';

    /**
     * Constant for MAU type: 10GbasePRU1
     * @see types()
     */
    const TYPE_10GBASEPRU1 = '.1.3.6.1.2.1.26.4.68';

    /**
     * Constant for MAU type: 10GbasePRU3
     * @see types()
     */
    const TYPE_10GBASEPRU3 = '.1.3.6.1.2.1.26.4.69';

    /**
     * Constant for MAU type: 40GbaseKR4
     * @see types()
     */
    const TYPE_40GBASEKR4 = '.1.3.6.1.2.1.26.4.70';

    /**
     * Constant for MAU type: 40GbaseCR4
     * @see types()
     */
    const TYPE_40GBASECR4 = '.1.3.6.1.2.1.26.4.71';

    /**
     * Constant for MAU type: 40GbaseSR4
     * @see types()
     */
    const TYPE_40GBASESR4 = '.1.3.6.1.2.1.26.4.72';

    /**
     * Constant for MAU type: 40GbaseFR
     * @see types()
     */
    const TYPE_40GBASEFR = '.1.3.6.1.2.1.26.4.73';

    /**
     * Constant for MAU type: 40GbaseLR4
     * @see types()
     */
    const TYPE_40GBASELR4 = '.1.3.6.1.2.1.26.4.74';

    /**
     * Constant for MAU type: 100GbaseCR10
     * @see types()
     */
    const TYPE_100GBASECR10 = '.1.3.6.1.2.1.26.4.75';

    /**
     * Constant for MAU type: 100GbaseSR10
     * @see types()
     */
    const TYPE_100GBASESR10 = '.1.3.6.1.2.1.26.4.76';

    /**
     * Constant for MAU type: 100GbaseLR4
     * @see types()
     */
    const TYPE_100GBASELR4 = '.1.3.6.1.2.1.26.4.77';

    /**
     * Constant for MAU type: 100GbaseER4
     * @see types()
     */
    const TYPE_100GBASEER4 = '.1.3.6.1.2.1.26.4.78';


    /**
     * Text representation of MAU types
     *
     * @see types()
     * @var array Text representations of interface media types
     */
    public static $TYPES = array(
        self::TYPE_AUI              => 'AUI',
        self::TYPE_10BASE5          => '10Base5',
        self::TYPE_FOIRL            => 'Foirl',
        self::TYPE_10BASE2          => '10Base2',
        self::TYPE_10BASET          => '10BaseT',
        self::TYPE_10BASEFP         => '10BaseFP',
        self::TYPE_10BASEFB         => '10BaseFB',
        self::TYPE_10BASEFL         => '10BaseFL',
        self::TYPE_10BROAD36        => '10Broad36',
        self::TYPE_10BASETHD        => '10BaseTHD',
        self::TYPE_10BASETFD        => '10BaseTFD',
        self::TYPE_10BASEFLHD       => '10BaseFLHD',
        self::TYPE_10BASEFLFD       => '10BaseFLFD',
        self::TYPE_100BASET4        => '100BaseT4',
        self::TYPE_100BASETXHD      => '100BaseTXHD',
        self::TYPE_100BASETXFD      => '100BaseTXFD',
        self::TYPE_100BASEFXHD      => '100BaseFXHD',
        self::TYPE_100BASEFXFD      => '100BaseFXFD',
        self::TYPE_100BASET2HD      => '100BaseT2HD',
        self::TYPE_100BASET2FD      => '100BaseT2FD',
        self::TYPE_1000BASEXHD      => '1000BaseXHD',
        self::TYPE_1000BASEXFD      => '1000BaseXFD',
        self::TYPE_1000BASELXHD     => '1000BaseLXHD',
        self::TYPE_1000BASELXFD     => '1000BaseLXFD',
        self::TYPE_1000BASESXHD     => '1000BaseSXHD',
        self::TYPE_1000BASESXFD     => '1000BaseSXFD',
        self::TYPE_1000BASECXHD     => '1000BaseCXHD',
        self::TYPE_1000BASECXFD     => '1000BaseCXFD',
        self::TYPE_1000BASETHD      => '1000BaseTHD',
        self::TYPE_1000BASETFD      => '1000BaseTFD',
        self::TYPE_10GIGBASEX       => '10GigBaseX',
        self::TYPE_10GIGBASELX4     => '10GigBaseLX4',
        self::TYPE_10GIGBASER       => '10GigBaseR',
        self::TYPE_10GIGBASEER      => '10GigBaseER',
        self::TYPE_10GIGBASELR      => '10GigBaseLR',
        self::TYPE_10GIGBASESR      => '10GigBaseSR',
        self::TYPE_10GIGBASEW       => '10GigBaseW',
        self::TYPE_10GIGBASEEW      => '10GigBaseEW',
        self::TYPE_10GIGBASELW      => '10GigBaseLW',
        self::TYPE_10GIGBASESW      => '10GigBaseSW',
        self::TYPE_10GIGBASECX4     => '10GigBaseCX4',
        self::TYPE_2BASETL          => '2BaseTL',
        self::TYPE_10PASSTS         => '10PassTS',
        self::TYPE_100BASEBX10D     => '100BaseBX10D',
        self::TYPE_100BASEBX10U     => '100BaseBX10U',
        self::TYPE_100BASELX10      => '100BaseLX10',
        self::TYPE_1000BASEBX10D    => '1000BaseBX10D',
        self::TYPE_1000BASEBX10U    => '1000BaseBX10U',
        self::TYPE_1000BASELX10     => '1000BaseLX10',
        self::TYPE_1000BASEPX10D    => '1000BasePX10D',
        self::TYPE_1000BASEPX10U    => '1000BasePX10U',
        self::TYPE_1000BASEPX20D    => '1000BasePX20D',
        self::TYPE_1000BASEPX20U    => '1000BasePX20U',
        self::TYPE_10GBASET         => '10GbaseT',
        self::TYPE_10GBASELRM       => '10GbaseLRM',
        self::TYPE_1000BASEKX       => '1000baseKX',
        self::TYPE_10GBASEKX4       => '10GbaseKX4',
        self::TYPE_10GBASEKR        => '10GbaseKR',
        self::TYPE_10G1GBASEPRXD1   => '10G1GbasePRXD1',
        self::TYPE_10G1GBASEPRXD2   => '10G1GbasePRXD2',
        self::TYPE_10G1GBASEPRXD3   => '10G1GbasePRXD3',
        self::TYPE_10G1GBASEPRXU1   => '10G1GbasePRXU1',
        self::TYPE_10G1GBASEPRXU2   => '10G1GbasePRXU2',
        self::TYPE_10G1GBASEPRXU3   => '10G1GbasePRXU3',
        self::TYPE_10GBASEPRD1      => '10GbasePRD1',
        self::TYPE_10GBASEPRD2      => '10GbasePRD2',
        self::TYPE_10GBASEPRD3      => '10GbasePRD3',
        self::TYPE_10GBASEPRU1      => '10GbasePRU1',
        self::TYPE_10GBASEPRU3      => '10GbasePRU3',
        self::TYPE_40GBASEKR4       => '40GbaseKR4',
        self::TYPE_40GBASECR4       => '40GbaseCR4',
        self::TYPE_40GBASESR4       => '40GbaseSR4',
        self::TYPE_40GBASEFR        => '40GbaseFR',
        self::TYPE_40GBASELR4       => '40GbaseLR4',
        self::TYPE_100GBASECR10     => '100GbaseCR10',
        self::TYPE_100GBASESR10     => '100GbaseSR10',
        self::TYPE_100GBASELR4      => '100GbaseLR4',
        self::TYPE_100GBASEER4      => '100GbaseER4'
    );
    
    
    /**
     * Get an array of device interface types
     *
     * @see $TYPES
     * @param boolean $translate If true, return the string representation
     * @return array An array of interface admin types
     */
    public function types( $translate = false )
    {
        $types = $this->getSNMP()->subOidWalk( self::OID_TYPE, 12 );

        if( !$translate )
            return $types;

        return $this->getSNMP()->translate( $types, self::$TYPES );
    }



}
