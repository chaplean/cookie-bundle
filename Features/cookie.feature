Feature: Index

  Scenario: See a headband
    Given I am on homepage
    When I wait Ajax
    Then I should see an ".cc_banner-wrapper" element

  Scenario: Accept cookie
    Given: I am on homepage
    When I wait Ajax
    And I click on ".cc_btn.cc_btn_accept_all"
    Then I should not see an ".cc_banner-wrapper" element
